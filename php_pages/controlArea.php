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


        ///////////////////
               // delete book by id
                function deleteBook(id) {
            if (confirm("Are you sure you want to delete this book?")) {
                // send AJAX request to delete_livre.php
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_livre.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                        location.reload(); //refresh page
                    } else {
                        alert("Error: " + xhr.status);
                    }
                };
                xhr.send("id=" + id);
            }
        }
        
        function editBook(id) {
   
    document.getElementById("bookId").value = id;

    document.getElementById("editTitre").value = "Book Title"; 
    document.getElementById("editSorti").value = "2024"; 
    document.getElementById("editSynopsis").value = "Book Synopsis"; 
    document.getElementById("editAuteur").value = "1"; 
    document.getElementById("editPages").value = "200"; 
    document.getElementById("editPrix").value = "20"; 
    document.getElementById("editPhoto").value = "https://example.com/photo.jpg"; 

    document.getElementById("editModal").style.display = "block";
}

function closeModal() {
    document.getElementById("editModal").style.display = "none";
}


function saveChanges() {
    var id = document.getElementById("bookId").value;
    var titre = document.getElementById("editTitre").value;
    var sorti = document.getElementById("editSorti").value;
    var synopsis = document.getElementById("editSynopsis").value;
    var auteur = document.getElementById("editAuteur").value;
    var pages = document.getElementById("editPages").value;
    var prix = document.getElementById("editPrix").value;
    var photo = document.getElementById("editPhoto").value;

    var formData = new FormData();
    formData.append('id', id);
    formData.append('titre', titre);
    formData.append('sorti', sorti);
    formData.append('synopsis', synopsis);
    formData.append('auteur', auteur);
    formData.append('pages', pages);
    formData.append('prix', prix);
    formData.append('photo', photo);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_livre.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert("Book updated successfully!");
            closeModal();
            location.reload(); // refresh page
        } else {
            alert('Error: ' + xhr.status);
        }
    };
    xhr.send(formData);
}

        ///////////////////
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
        <div class="outputs">
        <h3>List of Books</h3>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Release Year</th>
                    <th>Synopsis</th>
                    <th>Author</th>
                    <th>Pages</th>
                    <th>Price</th>
                    <th>Photo URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // display all books
                $query = "SELECT * FROM livres_num";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['titre'] . "</td>";
                    echo "<td>" . $row['sorti'] . "</td>";
                    echo "<td>" . $row['synopsis'] . "</td>";
                    echo "<td>" . $row['auteur'] . "</td>";
                    echo "<td>" . $row['pages'] . "</td>";
                    echo "<td>" . $row['prix'] . "</td>";
                    echo "<td>" . $row['photo'] . "</td>";
                    echo "<td>
                            <button onclick=\"editBook(" . $row['id'] . ")\">Edit</button>
                            <button onclick=\"deleteBook(" . $row['id'] . ")\">Delete</button>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    </div>
    <div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Edit Book</h2>
        <input type="hidden" id="bookId">
        <input type="text" id="editTitre" placeholder="Titre">
        <input type="number" min="1600" max="2099" step="1" id="editSorti" placeholder="Sorti">
        <textarea id="editSynopsis" placeholder="Synopsis"></textarea>
        <label for="editAuteur">Auteur</label>
        <select id="editAuteur">
            <?php  
            foreach($auteurs as $auteur){
                echo "<option value=" . $auteur['id'] .">". $auteur['prenom'] . " ". $auteur['nom']. "</option> ";
            }  
            ?>
        </select>
        <input type="number" id="editPages" placeholder="Pages">
        <input type="number" id="editPrix" placeholder="Prix">
        <input type="text" id="editPhoto" placeholder="Photo URL">
        <button onclick="saveChanges()">Save Changes</button>
    </div>
</div>

    <!-- Form to delete database -->
    <form action="reset_db.php" method="POST" onsubmit="return confirmDelete()">
        <button type="submit" name="delete" class="delete-btn">RESET DATABASE</button>
    </form>
    <br>
</body>
</html>
