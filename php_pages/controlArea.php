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
    <title>Document</title>
</head>
<body>
    <br>
    <button>RESET DATABASE</button>
    <br>
</body>
</html>