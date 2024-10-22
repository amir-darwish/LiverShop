<?php 
include("connection.php");
$conn = mysqli_connect($servername,$username,"",$dbname);
$titre = mysqli_real_escape_string($conn,$_POST['titre'] )  ?? null;
$sorti = $_POST['sorti'] ?? null;
$synopsis = mysqli_real_escape_string($conn, $_POST['synopsis'])  ?? null;
$auteur = $_POST['auteur'] ?? null;
$photo = $_POST['photo'] ?? null;
$pages = $_POST['pages'] ?? null;
$prix = $_POST['prix'] ?? null;

if (!empty($titre) && !empty($sorti) && !empty($pages)) {
    $query = "INSERT INTO livres_num (titre, sorti, synopsis, auteur, pages, prix, photo) 
    VALUES ('$titre', '$sorti', '$synopsis', '$auteur', '$pages', '$prix', '$photo')";

    if (mysqli_query($conn, $query)) {
        echo "livre added successfully!";
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    }
else{
    echo "error in informatios <br>";
}
?>