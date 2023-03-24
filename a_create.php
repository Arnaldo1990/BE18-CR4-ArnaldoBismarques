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
    echo "Success <a class='btn btn-dark' href='index.php'>Back to Homepage</a>";
}else {
    echo "Smth went wrong";
}
}
xxx
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="scripts.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="author" content="Arnaldo Bismarques">
    <meta name="description" content="database">
    <title>BE18-CR4-ARNALDOBISMARQUES</title>
    </head>
    
    
    <body>
        <header>
        </header>
        <main>
        </main>
        <footer>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    
    </html>