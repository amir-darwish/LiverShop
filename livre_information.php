<?php
// Vérifier si l'id de l'auteur est passé via l'URL
if (isset($_GET['id']) && $_GET['id'] !== '') {
    $livre_ID = $_GET['id'];
    $api_url = 'https://filrouge.uha4point0.fr/V2/livres/livres';
    $response = file_get_contents($api_url);
    $livres = json_decode($response, true);
    if ($response !== false) {
        $livres = json_decode($response, true);
        foreach ($livres as $livre) {
            if ((int) $livre['id'] == (int) $livre_ID) {
                break;
            } 
        }
    
    }else {
        $livre = [];
    }
}
else{
    // Rediriger si aucun id n'est passé
    header('Location: index.php');
    exit;
}

$api_url_auteurs='https://filrouge.uha4point0.fr/V2/livres/auteurs';
$response = file_get_contents($api_url_auteurs);
if ($response !== false) {
    $auteurs = json_decode($response, true);
    foreach ($auteurs as $auteur) {
        if ((int) $auteur['id'] == (int) $livre['auteur']) {
            break;
        }
    }
}
else{
    $auteurs = [];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" >
        <meta http-equiv="X-UA-Comptaible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LiverShop</title>

        <link rel="stylesheet" href="css/masterdd.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <meta name = "description" content="This is our Book Store"/>
    </head>

<body>
<!-- header section start -->
<?php require_once(__DIR__ .'/php_pages/header.php'); ?>
<!-- header section end -->


<!-- bottom navbar  -->
<nav class="bottom-navbar">
    <a href="index.php" class="fas fa-home"></a>
    <a href="#auteurs" class="fas fa-pencil"></a>
    <a href="livers-papier.php" class="fas fa-book-open"></a>
    <a href="#livers-numerique" class="fas fa-file-pdf"></a>
    <a href="#contact" class ="fas fa-envelope"></a>
    </nav>
<!-- bottom-navbar end  -->
<section class="books" id="book-id">
    <div class="book-preview">
        <img src="imgID/<?php echo $livre['id'] . '.jpg'?>" alt="">
        <div class="content">

        <?php echo '<h3>'. $livre['titre'] . '</h3>' ?>
            <div class="info">
                <div class="auteur"><strong>Auteur: 
        <?php echo '<a href="livres_auteur.php?id='.$auteur['id'].'"> ' . $auteur['prenom'] . ' ' . $auteur['nom']. '</a></strong> </div>' ?> 
                <div class="sorti"><strong>Sorti: </strong><?php echo $livre['sorti']?></div>
                <div class="page"><strong>Pages: </strong> <?php echo $livre['pages']?></div>
            </div>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span><?php echo ' ( '. (int)$livre['pages']-91 . ' )' ?></span>
            </div>

            <p><?php echo $livre['synopsis']?></p>

            <div class="price"><strong>Prix:</strong> <?php echo $livre['prix']?>€</div>
            <div class="btn">
                <a href="#">Ajouter au panier</a>
            </div>
        </div>
    </div>
</section>
<!-- icons sections starts -->
<?php require_once(__DIR__ .'/php_pages/icons_center.php') ?> 
<!-- icons sections end -->
<!-- featured section starts  -->
<section class="featured" id="featured">

    <h1 class="heading"> <span>Notre offers</span></h1>
    <div class="featured-slider">
        <div class="wrapper-2">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="book-id1.html" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/book _id1.jpeg" alt="">
                </div>
                <div class="content" data-name="id-1">
                    <h3>J’irai cracher sur vos tombes</h3>
                    <div class="price">13.99€ <span>24.99€</span></div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/book_id2.jpg" alt="">
                </div>
                <div class="content" data-name="id-2">
                    <h3>Stupeur et Tremblements</h3>
                    <div class="price">11.99€ <span>24.99€</span></div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/book._id3jpg" alt="">
                </div>
                <div class="content" data-name="id-3">
                    <h3>Le Père Goriot</h3>
                    <div class="price">15.99€ <span>24.99€</span></div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/book_id4.jpg" alt="">
                </div>
                <div class="content" data-name="id-4">
                    <h3>L’écume des Jours</h3>
                    <div class="price">15.99€ <span>24.99€</span></div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/book_id5.jpeg" alt="">
                </div>
                <div class="content" data-name="id-5">
                    <h3>Illusions perdues</h3>
                    <div class="price">12.99€ <span>24.99€</span></div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="img/book_id6.jpg" alt="">
                </div>
                <div class="content" data-name="id-6">
                    <h3>La teresse</h3>
                    <div class="price">15.99€ <span>24.99€</span></div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
    
        
        </div>
        
    </div>
    </section>
    <!-- featured section end  -->
<!-- Footer section starts -->
<?php require_once(__DIR__ .'/php_pages/footer.php') ?>
<!-- Footer section end -->
