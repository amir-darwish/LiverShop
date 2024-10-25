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


        
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('submit').addEventListener('click', function(e) {
                e.preventDefault(); // block refresh page
               // 
                var titre = document.getElementById('Titre').value;
                var sorti = document.querySelector('input[type="number"][placeholder="Sorti"]').value;
                var synopsis = document.getElementById('synopsis').value;
                var auteur = document.getElementById('auteur').value;
                var pages = document.getElementById('pages').value;
                var prix = document.getElementById('prix').value;
                var photo = document.getElementById('photo').value;

                var genres = [];
                document.querySelectorAll('.genres input[type="checkbox"]:checked').forEach(function(checkbox) {
                    genres.push(checkbox.id);
                });

                // Prepare an object data to send
                var formData = new FormData();
                formData.append('titre', titre);
                formData.append('sorti', sorti);
                formData.append('synopsis', synopsis);
                formData.append('auteur', auteur);
                formData.append('pages', pages);
                formData.append('prix', prix);
                formData.append('photo', photo);
                formData.append('genres', genres.join(','));

                // send data by AJAX to add_livre.php
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'add_livre.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        document.querySelector('.outputs').innerHTML = xhr.responseText;
                    } else {
                        document.querySelector('.outputs').innerHTML = 'Error: ' + xhr.status;
                    }
                };
                xhr.send(formData);
            });
        });
    </script>
</head>
<body>
    <div class="crud">
        <div class="head">
            <h2>LIVRESHOP</h2>
            <p>CONTROL PANEL AREA</p>
        </div>
        <div class="inputs">
            <input type="text" placeholder="Titre" name="titre" id="Titre">
            <input type="number" min="1600" max="2099" step="1" value="2024" placeholder="Sorti">
            <textarea name="synopsis" id="synopsis" placeholder="Synopsis"></textarea>
            <label for="auteur">Auteur</label>
            <select name="auteur" id="auteur">
                <?php  
                foreach($auteurs as $auteur){
                    echo "<option value=" . $auteur['id'] .">". $auteur['prenom'] . " ". $auteur['nom']. "</option> ";
                }  
                ?>
            </select>

            <input type="number" placeholder="Pages" name="pages" id="pages">
            <input type="number" placeholder="Prix" name="prix" id="prix">
            
            <div class="genres">
                <?php
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
    <form action="reset_db.php" method="POST" onsubmit="return confirmDelete()">
        <button type="submit" name="delete" class="delete-btn">RESET DATABASE</button>
    </form>
    <br>
</body>
</html>
