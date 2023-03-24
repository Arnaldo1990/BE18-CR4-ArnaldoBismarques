<?php

require "db_connect.php";

$id = $_GET["id"];

$sqlSelect = "SELECT * FROM media WHERE id = $id";
$result = mysqli_query($connect, $sqlSelect);
$row = mysqli_fetch_assoc($result);

if($row["picture"] != "defaultpicture.jpg"){
    unlink("picture/{$row["picture"]}");
}

$sql = "DELETE FROM `media` WHERE id = $id";


if(mysqli_query($connect, $sql)){
    echo "Success <a class='btn btn-dark' href='index.php'>Back to Homepage</a";
}else {
    echo "Error <a class='btn btn-dark' href='index.php'>Back to Homepage</a";
}

?>