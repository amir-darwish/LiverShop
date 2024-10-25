<?php
include("php_pages/connection.php");
$conn = mysqli_connect($servername, $username, "", $dbname);

// number of auteurs per page
$records_per_page = 5;

// set the current page from the URL or set the default page to 1
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

// count the total number of records
$total_query = "SELECT COUNT(*) as total FROM `auteurs`";
$total_result = mysqli_query($conn, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_records = $total_row['total'];

// calculate the total number of pages 
$total_pages = ceil($total_records / $records_per_page);

// fetch the data from the database
$query = "SELECT * FROM `auteurs` LIMIT $records_per_page OFFSET $offset";
$result = mysqli_query($conn, $query);
$auteurs = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LivreShop</title>

        <link rel="stylesheet" href="css/masterdd.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <meta name="description" content="Book Store"/>
        

    </head>
<body>
<!-- header section start -->
<?php require_once(__DIR__ .'/php_pages/header.php'); ?>
<!-- header section end -->
 <!-- login form start -->
<?php require_once(__DIR__ .'/php_pages/login.php'); ?>
<!-- login form end -->
    <h1 class="Authors">Liste des auteurs</h1>

    <div class="authors-container">
        <?php
        if (!empty($auteurs)) {
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
                echo '<button class="btn" onclick="openModal(' . $auteur['id'] . ')">Afficher les livres</button>';
                echo '</div>'; 
                echo '</div>'; 

                echo '</div>'; 
            }
        } else {
         echo '<h2>Aucun auteur trouvé.</h2>';
        }
        ?>
    </div>

    <!-- Pagintation -->
    <div id="pagination">
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <button <?php if ($i == $page) echo 'class="active"'; ?>>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        </button>
        <?php endfor; ?>
    </div>

    <!-- POP - UP -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h1>Liste des livres</h1>
            <div id="books-list" class="books-list"></div>
        </div>
    </div>

<!-- Footer section starts -->
<?php require_once(__DIR__ .'/php_pages/footer.php') ?>
<!-- Footer section end -->

<script src="js/script.js"></script>


</body>
</html>
