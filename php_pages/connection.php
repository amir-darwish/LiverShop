<?php

$servername = "localhost";
$username = "root";
$dbname = "LivreShop1";
$conn = mysqli_connect($servername,$username,"",);
if (!$conn){
    die("ERROR". mysqli_connect_error());
} 