<?php
include("connection.php");
$conn = mysqli_connect($servername, $username, "", $dbname);

$id = $_POST['id'];
$titre = mysqli_real_escape_string($conn, $_POST['titre']);
$sorti = $_POST['sorti'];
$synopsis = mysqli_real_escape_string($conn, $_POST['synopsis']);
$auteur = $_POST['auteur'];
$pages = $_POST['pages'];
$prix = $_POST['prix'];
$photo = $_POST['photo'];

$query = "UPDATE livres_num SET 
    titre = '$titre', 
    sorti = '$sorti', 
    synopsis = '$synopsis', 
    auteur = '$auteur', 
    pages = '$pages', 
    prix = '$prix', 
    photo = '$photo' 
    WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    echo "Book updated successfully!";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
