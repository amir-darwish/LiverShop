<?php

$servername = "localhost";
$username = "root";
$dbname = "test";
$conn = mysqli_connect($servername,$username,"",);
if (!$conn){
    die("ERROR". mysqli_connect_error());
} 