<?php

        require "db_connect.php";
        require "file_upload.php";


        $id = $_GET["id"];
        $sql = "SELECT * FROM media WHERE id = $id";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        
        if(isset($_POST["submit"])){
            $title = $_POST["title"];
            $isbn = $_POST["ISBN"];
            $type = $_POST["type"];
            $author_first_name = $_POST["author_first_name"];
            $author_last_name = $_POST["author_last_name"];
            $publisher = $_POST["publisher_name"];
            $publisher_address = $_POST["publisher_address"];
            $publish_date = $_POST["publish_date"];

            $picture = file_upload($_FILES["picture"], "update");
            if($picture->error == 0){
                if($row["picture"] != "defaultpicture.jpg"){
                    unlink("pictures/{$row["picture"]}");

                    $sqlUpdate = "UPDATE `media` SET `id`=`title`='$title',`picture`='$picture->fileName',`ISBN`='$isbn',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher',`publisher_address`='$publisher_address',`publish_date`='$publish_date' WHERE id = $id";
                }
            }else {
                $sqlUpdate = "UPDATE `media` SET `id`=`title`='$name',`ISBN`='$isbn',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher',`publisher_address`='$publisher_address',`publish_date`='$publish_date' WHERE id = $id";
            }
            if(mysqli_query($connect, $sqlUpdate)){
                header("Location: index.php");
            }
        }
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

<body>
    <header>
       
        <div class="container">
            <h1 class="text-center">Update Media</h1>
                    <form method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Fill in media title" class="form-control" name="title" value="<?= $row["title"]?>">
                        <input type="number" placeholder="ISBN" class="form-control" name="ISBN" value="<?= $row["ISBN"]?>">
                        <input type="text" placeholder="Type" class="form-control" name="type" value="<?= $row["type"]?>">
                        <input type="text" placeholder="Insert author firstname" class="form-control" name="author_first_name" value="<?= $row["author_first_name"]?>">
                        <input type="text" placeholder="Insert author lastname" class="form-control" name="author_last_name" value="<?= $row["author_last_name"]?>">
                        <input type="text" placeholder="Publisher" class="form-control" name="publisher_name" value="<?= $row["publisher_name"]?>">
                        <input type="text" placeholder="Publisher Address" class="form-control" name="publisher_address" value="<?= $row["publisher_address"]?>">
                        <input type="Date" placeholder="YYYY-MM-DD" class="form-control" name="publish_date" value="<?= $row["publish_date"]?>">
                        <input type="file" class="form-control" name="picture">

                        <input type="submit" class="btn btn-outline-dark" name="submit" value="Update">


                    </form>
        </div>
    </header>
    <main>
    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>