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
        <img src="img/book _id1.jpeg" alt="">
        <div class="content">
            <h3>J’irai cracher sur vos tombes</h3>

            <div class="info">
                <div class="auteur"><strong>Auteur: 
                    <a href="#">Vian BORIS </a></strong> </div> 
                <div class="sorti"><strong>Sorti:</strong> 1946</div>
                <div class="page"><strong>Pages:</strong> 192</div>
            </div>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(250)</span>
            </div>

            <p>Lee Anderson, un homme né d'une mère mulâtre, et qui a la peau blanche et les cheveux blonds, quitte sa ville natale après la mort de son frère noir, lynché parce qu'il était amoureux d'une blanche.</p>

            <div class="price"><strong>Prix:</strong> 2.8€</div>
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
