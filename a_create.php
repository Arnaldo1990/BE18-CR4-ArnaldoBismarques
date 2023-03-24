<?php

require "db_connect.php";
require "file_upload.php";


if($_POST){
    $title = $_POST["title"];
    $picture = file_upload($_FILES["picture"]);
    $ISBN = $_POST["ISBN"];
    $type = $_POST["type"];
    $authorfirstname = $_POST["author_first_name"];
    $authorlastname = $_POST["author_last_name"];
    $publisher = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publishdate = $_POST["publish_date"];
    

$sql = "insert into `media`(`title`, `picture`, `ISBN`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES 
('$title', '$picture->fileName', '$ISBN', '$type', '$authorfirstname', '$authorlastname', '$publisher', '$publisher_address', '$publishdate')";

if(mysqli_query($connect, $sql)){
    echo "Success";
}else {
    echo "Smth went wrong";
}
}

?>