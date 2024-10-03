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
<!-- header section start -->
<?php require_once(__DIR__ .'/php_pages/header.php'); ?>
<!-- header section end -->

    
    
    <!-- bottom navbar  -->
    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#auteurs" class="fas fa-pencil"></a>
        <a href="#livers-papier" class="fas fa-book-open"></a>
        <a href="#livers-numerique" class="fas fa-file-pdf"></a>
        <a href="#contact" class ="fas fa-envelope"></a>
        </nav>
    <!-- bottom-navbar end  -->

    <!-- featured section starts  -->
    <section class="featured" id="featured">
    <h1 class="heading"> <span>Livers Papiers</span></h1>
    <div class="featured-slider">
        <div class="wrapper-2" id="book-container">
            <!-- سيتم هنا عرض الكتب -->
        </div>
    </div>
</section>
    <script src="js/script.js"></script> <!-- ربط الكود JavaScript -->
    
    <!-- featured section end  -->
     
<!-- Footer section starts -->
<?php require_once(__DIR__ .'/php_pages/footer.php') ?>
<!-- Footer section end -->
</html>