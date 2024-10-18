<?php 
include("connection.php");
//------------------------------------------------------- DELETE AND CREATE DATA BASE -----------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------------

//delete database
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {

    if ($conn ) {
        $sqlCommande = "CREATE DATABASE IF NOT EXISTS $dbname";
        mysqli_query($conn, $sqlCommande);
        if (mysqli_connect($servername,$username,"",$dbname)){
            $sqlCommande = "DROP DATABASE $dbname";
            if (mysqli_query($conn, $sqlCommande)) {
                echo "Delete DATABASE DONE <br>";
        } else {
                echo "ERROR We can't delete $dbname";
        }
        }

    //create database
        $sqlCommande = "CREATE DATABASE IF NOT EXISTS $dbname";
        mysqli_query($conn, $sqlCommande);
        mysqli_select_db($conn, $dbname);

    //create table auteurs
        $sqlCommande = "CREATE TABLE IF NOT EXISTS `auteurs` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `nom` varchar(50) NOT NULL,
        `prenom` varchar(50) NOT NULL,
        `naissance` date NOT NULL,
        `mort` date DEFAULT NULL,
        `biographie` text NOT NULL,
        `photo` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
    mysqli_query($conn, $sqlCommande);
    //create table genre
        $sqlCommande = "CREATE TABLE IF NOT EXISTS `genres` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `nom` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY `nom` (`nom`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    mysqli_query($conn, $sqlCommande);
    //create table livres
        $sqlCommande = "CREATE TABLE IF NOT EXISTS `livres` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `titre` varchar(50) NOT NULL,
        `sorti` varchar(4) NOT NULL,
        `synopsis` text DEFAULT NULL,
        `auteur` int(11) NOT NULL,
        `pages` int(11) NOT NULL,
        `prix` double NOT NULL,
        `photo` varchar(255) DEFAULT NULL,
        PRIMARY KEY (`id`),
        KEY `auteur` (`auteur`),
        CONSTRAINT `livres_ibfk_1` FOREIGN KEY (`auteur`) REFERENCES `auteurs` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    mysqli_query($conn, $sqlCommande);
    //create table livres_genres
        $sqlCommande = "CREATE TABLE IF NOT EXISTS `livres_genres` (
        `livre_id` int(11) NOT NULL,
        `genre_id` int(11) NOT NULL,
        PRIMARY KEY (`livre_id`, `genre_id`),
        KEY `genre_id` (`genre_id`),
        CONSTRAINT `livres_genres_ibfk_1` FOREIGN KEY (`livre_id`) REFERENCES `livres` (`id`),
        CONSTRAINT `livres_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    mysqli_query($conn, $sqlCommande);

        if (mysqli_query($conn, $sqlCommande)) {
            echo "create database .... <br> ";
        } else {
            echo "error in creat database";
        }

    }
}
//------------------------------------------------------------- FETCH DATA FROM API -------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------------

function fetchData($url) {
    $ch = curl_init();

    // Settings of cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); 
    // Start connect
    $response = curl_exec($ch);

    // errors handiling
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        $response = false; 
    }

    curl_close($ch);
    return $response;
}

//FETCH AUTEURS
$api_url_auteurs = 'https://filrouge.uha4point0.fr/V2/livres/auteurs';
$response_auteurs = fetchData($api_url_auteurs);
if ($response_auteurs !== false) {
    $auteurs = json_decode($response_auteurs, true);
} else {
    $auteurs = [];
}

//FETCH BOOKS
$api_url_livres = 'https://filrouge.uha4point0.fr/V2/livres/livres';
$response_livres = fetchData($api_url_livres);
if ($response_livres !== false) {
    $livres = json_decode($response_livres, true);
} else {
    $livres = [];
}

//------------------------------------------------------------ INSERT DATA TO DATABASE ----------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------------

// INSERT AUTEURS
foreach ($auteurs as $auteur) {
    $nom = mysqli_real_escape_string($conn, $auteur['nom']);
    $prenom = mysqli_real_escape_string($conn, $auteur['prenom']);
    $naissance = mysqli_real_escape_string($conn, $auteur['naissance']);
    
// check mort value is empty 
    $mort = !empty($auteur['mort']) ? mysqli_real_escape_string($conn, $auteur['mort']) : null;

    $biographie = mysqli_real_escape_string($conn, $auteur['biographie']);
    $photo = mysqli_real_escape_string($conn, $auteur['photo']);
    
    // INSERT TO mySQL
    $sqlCommande = "INSERT INTO `auteurs` (`nom`, `prenom`, `naissance`, `mort`, `biographie`, `photo`) 
    VALUES ('$nom', '$prenom', '$naissance', " . ($mort ? "'$mort'" : "NULL") . ", '$biographie', '$photo')";
    mysqli_query($conn, $sqlCommande);

}
//INSERT GENERS



// INSERT LIVRES 
foreach ($livres as $livre) {
    $titre = mysqli_real_escape_string($conn, $livre["titre"]);
    $sorti = mysqli_real_escape_string($conn, $livre["sorti"]);
    $synopsis = mysqli_real_escape_string($conn, $livre["synopsis"]);
    $auteur = mysqli_real_escape_string($conn, $livre["auteur"]);
    $pages = mysqli_real_escape_string($conn, $livre["pages"]);
    $prix = mysqli_real_escape_string( $conn, $livre["prix"]);
    $photo = mysqli_real_escape_string( $conn,'/Book_Store/imgID/noimage.png'); 
    if ($livre['id'] < 15){
        $photo = mysqli_real_escape_string( $conn,'/Book_Store/imgID/'. $livre['id'] . '.jpg'); 
    }
   

    $sqlCommande = "INSERT INTO `livres` (`titre`, `sorti`, `synopsis`, `auteur`, `pages`, `prix`, `photo`) 
    VALUES ('$titre', '$sorti', '$synopsis', '$auteur', '$pages', '$prix', '$photo')";
    mysqli_query($conn, $sqlCommande);
    $livre_id = mysqli_insert_id($conn);

    foreach ($livre["genre"] as $nom){

        $nom = mysqli_real_escape_string($conn, $nom); 
        //verify if exist
        $sqlCheck = "SELECT * FROM genres WHERE nom = '$nom'";
        $resultCheck = mysqli_query($conn, $sqlCheck);

        if (mysqli_num_rows($resultCheck) == 0) {
            // if not exist insert
            $sqlCommande = "INSERT INTO genres (nom) VALUES ('$nom')";
            mysqli_query($conn, $sqlCommande);
             // Get the inserted genre's id
             $genre_id = mysqli_insert_id($conn);
            } else {
                // If genre exists, get its id
                $row = mysqli_fetch_assoc($resultCheck);
                $genre_id = $row['id'];
            // Insert the relationship between the book and the genre into 'livres_genres' table
            
        }
            $sqlInsertLivresGenres = "INSERT INTO livres_genres (livre_id, genre_id) 
            VALUES ('$livre_id', '$genre_id')";
            mysqli_query($conn, $sqlInsertLivresGenres);

    }

}



?>
