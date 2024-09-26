<?php
// Vérifier si l'id de l'auteur est passé via l'URL
if (isset($_GET['id'])) {
    $author_id = $_GET['id'];

    // URL de l'API pour récupérer les livres de cet auteur
    $api_url = 'https://filrouge.uha4point0.fr/V2/livres/livres' ;

    // Récupérer les livres de l'auteur
    $response = file_get_contents($api_url);

    // Vérifier si la réponse a été reçue correctement
    if ($response !== false) {
        // Convertir les données JSON en tableau PHP
        $livres = json_decode($response, true);
        $i=0;
        foreach ($livres as $livers1)
        {
            
            if ((int)$livers1['auteur'] !== (int)$author_id) {
                unset($livres[$i]);
            }
            $i++;
        }
    } else {
        $livres = [];
    }
} else {
    // Rediriger si aucun id n'est passé
    header('Location: index.php');
    exit;
}
$api_url_auteurs='https://filrouge.uha4point0.fr/V2/livres/auteurs';
$response = file_get_contents($api_url_auteurs);
if ($response !== false) {
    $auteurs = json_decode($response, true);
}
foreach ($auteurs as $auteur) {
    if ((int) $auteur['id'] === (int) $author_id) {
        break;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" >
        <meta http-equiv="X-UA-Comptaible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LivreShop</title>

        <link rel="stylesheet" href="css/masterdd.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <meta name = "description" content="Book Store"/>
    </head>

<body>
<!-- header section start -->
<?php require_once(__DIR__ .'/php_pages/header.php'); ?>
<!-- header section end -->


<!-- bottom navbar  -->
<nav class="bottom-navbar">
    <a href="/index.php" class="fas fa-home"></a>
    <a href="#auteurs" class="fas fa-pencil"></a>
    <a href="/livers-papier.php" class="fas fa-book-open"></a>
    <a href="#livers-numerique" class="fas fa-file-pdf"></a>
    <a href="#contact" class ="fas fa-envelope"></a>
    </nav>
<!-- bottom-navbar end  -->
<body>

    <section class="featured" id="featured">
<?php echo '<h1 class="heading"> <span>'. $auteur['prenom']. ' '.$auteur['nom'] . '</span></h1>'; ?>
<div class="featured-slider">
    <div class="wrapper-2">       
         <?php
        if (!empty($livres)) {
            // Boucler sur la liste des livres
            foreach ($livres as $livre) {
                echo '<div class="box">';
                echo '<div class="icons">';
                echo '<a href="#" class="fas fa-search"></a>';
                echo '<a href="#" class="fas fa-heart"></a>';
                echo '<a href="#" class="fas fa-eye"></a>';
                echo '</div>'; 
                echo ' <div class="image">';           
                echo '<img src="imgID/'. $livre['id']. '.jpg" alt="">';
                echo '</div>'; 
                echo '<div class="content" data-name="id-5">';
                echo '<h3>' . $livre['titre'] . '</h3>';
                echo '<div class="price">' . $livre['prix'].'€ </div>';
                echo '<a href="#" class="btn">Ajouter au panier</a>';

                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<h1>Aucun livre trouvé pour cet auteur.</h1>';

        }
        ?>
    </div>
    </div>
<!-- icons sections starts -->
<?php require_once(__DIR__ .'/php_pages/icons_center.php') ?> 
<!-- icons sections end -->
<!-- Footer section starts -->
<?php require_once(__DIR__ .'/php_pages/footer.php') ?>
<!-- Footer section end -->
</body>
</html>
