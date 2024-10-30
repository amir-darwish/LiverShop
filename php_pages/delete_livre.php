<?php
include("connection.php");
$conn = mysqli_connect($servername, $username, "", $dbname);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM livres_num WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo "Book deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No ID provided for deletion.";
}
?>
