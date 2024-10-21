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
            
            <label for="auteur">Author</label>
            <select name="auteur" id="auteur">
                <option value="1">Author 1</option>      
                <option value="2">Author 2</option>
                <option value="3">Author 3</option>
            </select>

            <input type="number" placeholder="Pages" name="pages" id="page">
            <input type="number" placeholder="Price" name="price" id="price">
            
            <div class="genres">
                <label><input type="checkbox" name="genre1" id="genre1"> Fiction</label>
                <label><input type="checkbox" name="genre2" id="genre2"> Science</label>
                <label><input type="checkbox" name="genre3" id="genre3"> Biography</label>
                <label><input type="checkbox" name="genre4" id="genre4"> Fantasy</label>
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
