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



 <!-- home section starts -->
<section class="home" id="home">
    <div class="row">

        <div class="content">

            <h3>Jusqu'à 75% de réduction</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, consequatur. Nisi neque voluptatum impedit
            earum officia nobis nihil asperiores? Provident, nulla numquam corporis incidunt voluptatem ipsa quidem praesentium sit ullam.</p>
            <a href="#" class="btn">Achetez maintenant</a>
        </div>
        <div class="book-slider">
            <div class="wrapper">
                <a href="#"><img src="img/book _id1.jpeg" alt=""></a>
                <a href="#"><img src="img/book_id2.jpg" alt=""></a>
                <a href="#"><img src="img/book._id3jpg" alt=""></a>


            </div>
        </div>

    </div>    




</section>
<!-- home section end -->

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
                <a href="#" class="fa-solid fa-book-open-reader"></a>
                <a href="book-id1.php" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="img/book _id1.jpeg" alt="">
            </div>
            <div class="content" data-id="id-1">
                <h3>J’irai cracher sur vos tombes</h3>
                <div class="price">2.8€ <span>6.99€</span></div>
                <a href="#" class="btn">Ajouter au panier</a>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fa-solid fa-book-open-reader"></a>
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
                <a href="#" class="fa-solid fa-book-open-reader"></a>
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
                <a href="#" class="fa-solid fa-book-open-reader"></a>
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
                <a href="#" class="fa-solid fa-book-open-reader"></a>
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

    
    </div>
    
</div>
</section>
<!-- featured section end  -->



<!-- Footer section starts -->
<?php require_once(__DIR__ .'/php_pages/footer.php') ?>
<!-- Footer section end -->



<script src="js/script.js"></script>
</body>
 
</html>