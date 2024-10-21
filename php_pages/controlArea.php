<?php 
include("connection.php");
$conn = mysqli_connect($servername,$username,"",$dbname);

$query = "SELECT * FROM `auteurs`";
$result = mysqli_query($conn,$query);
$auteurs = mysqli_fetch_all($result, MYSQLI_ASSOC);

$query = "SELECT * FROM `genres`";
$result = mysqli_query($conn,$query);
$genres = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleCP.css">
    <title>Control Panel</title>
    <script>
        function confirmDelete(){
            return confirm("Do you want delete the database?");
        }
    </script>
</head>
<body>
    <div class="crud">
        <div class="head">
            <h2>LIVRESHOP</h2>
            <p>CONTROL PANEL AREA</p>
        </div>
        <div class="inputs">
            <input type="text" placeholder="Title" name="title" id="title">
            <input type="number" min="1600" max="2099" step="1" value="2024" placeholder="Year">
            <textarea name="synopsis" id="synopsis" placeholder="Synopsis"></textarea>
            <label for="auteur">Auteur</label>
            <select name="auteur" id="auteur">
            <?php  
            foreach($auteurs as $auteur){
                echo "<option value=" . $auteur['id'] .">". $auteur['prenom'] . " ". $auteur['nom']. "</option> ";
            }  
            ?>
            </select>

            <input type="number" placeholder="Pages" name="pages" id="page">
            <input type="number" placeholder="Price" name="price" id="price">
            
            <div class="genres">

            <?php
            $str ='<label><input type="checkbox" name="genre1" id="genre1"> Fiction</label>';
            foreach ($genres as $genre) {
                echo '<label><input type="checkbox" name='.'"'. $genre['nom'] .'"'.' id='.'"'. $genre['id'].'">'. $genre['nom'].'</label>';
            }
            ?>

            </div>
            
            <input type="text" placeholder="Photo URL" name="photo" id="photo">
            <button id="submit">Add</button>
        </div>
        <div class="outputs"></div>
    </div>

    <!-- Form to delete database -->
    <form action="delete_db.php" method="POST" onsubmit="return confirmDelete()">
        <button type="submit" name="delete" class="delete-btn">RESET DATABASE</button>
    </form>
    <br>
</body>
</html>
