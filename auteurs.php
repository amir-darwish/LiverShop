<?php
// URL de votre API
$api_url = 'https://filrouge.uha4point0.fr/V2/livres/auteurs';

// Utiliser file_get_contents pour récupérer les données de l'API
$response = file_get_contents($api_url);

// Vérifier si la réponse a été reçue correctement
if ($response !== false) {
    // Convertir les données JSON en tableau PHP
    $auteurs = json_decode($response, true);
} else {
    $auteurs = [];
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
    <h1 class="Authors">Liste des auteurs</h1>

    <div class="authors-container">
        <?php
        if (!empty($auteurs)) {
            // Boucler sur la liste des auteurs
            foreach ($auteurs as $auteur) {
                echo '<div class="author-card">';
                echo '<img src="' . $auteur['photo'] . '" alt="Photo de l\'auteur">';

                echo '<div class="author-details">';
                echo '<h3>' . $auteur['prenom'] . ' ' . $auteur['nom'] . '</h3>';
                echo '<p class="dates">Né(e) le : ' . $auteur['naissance'] . '<br>';

                // Vérification si l'auteur est mort ou encore vivant
                if (!empty($auteur['mort'])) {
                    echo 'Mort(e) le : ' . $auteur['mort'] . '</p>';
                } else {
                    echo 'Vivant(e)</p>';
                }

                // Afficher la biographie
                echo '<p class="biographie">' . $auteur['biographie'] . '</p>';
              
                echo '<div class="btn-container">';
                echo '<a href="livres.php?id=' . $auteur['id'] . '" class="btn">Afficher les livres</a>';
                echo '</div>'; 
                echo '</div>'; 

                echo '</div>'; 
               

            }
        } else {
         echo '<p>Aucun auteur trouvé.</p>';
        }
        ?>
    </div>
<!-- Footer section starts -->
<?php require_once(__DIR__ .'/php_pages/footer.php') ?>
<!-- Footer section end -->
</body>
</html>