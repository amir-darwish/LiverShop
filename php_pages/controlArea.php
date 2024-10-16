<?php
session_start();

if(isset($_SESSION["username"])){
    echo 'Welcome ' . $_SESSION['username'] . ' You are admin :) ';

} else {
    echo " error you are not admin <br>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <script>
        function confirmDelete(){

            return confirm("Do you want delete database ? ");
        }
    </script>
</head>
<body>
    <br>

    <form action="delete_db.php" method="POST" onsubmit="return confirmDelete()">

        <button type="submit" name="delete">RESET DATABASE</button>

    </form>

    
    <br>
</body>
</html>