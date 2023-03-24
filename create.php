<?php
if(isset($_POST["submit"])){
    $name = $_POST["title"];
    $author = $_POST["author_last_name"];
    $publisher = $_POST["publisher_name"];
    $picture = $_FILES["picture"];

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
            <h1 class="text-center">Add Media</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Fill in media title" class="form-control" name="title">
                        <input type="text" placeholder="Insert author" class="form-control" name="author_last_name">
                        <input type="text" placeholder="Publisher" class="form-control" name="publisher_name">
                        <input type="file" class="form-control" name="picture">

                        <input type="submit" class="btn btn-outline-dark" name="submit" value="Save">


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