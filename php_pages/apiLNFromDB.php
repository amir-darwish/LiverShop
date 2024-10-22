<?php
include("connection.php");
$conn = mysqli_connect($servername, $username, "", $dbname);

if (!$conn) {
    die(json_encode(["error" => "Connection failed: " . mysqli_connect_error()]));
}

$query = "SELECT * FROM `livres_num`";
$result = mysqli_query($conn, $query);

if ($result) {
    $livres = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($livres, );
} else {
    echo json_encode(["error" => "Error in query: " . mysqli_error($conn)]);
}

mysqli_close($conn);
?>