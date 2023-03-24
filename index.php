<?php
require "db_connect.php";

$sql = "select * from media"; 

$result = mysqli_query($connect, $sql);

$body = "";

if(mysqli_num_rows($result) > 0){
        // $body .="I have found results";
        while($row = mysqli_fetch_assoc($result)){
            $body.= "
                <tr>
                    <td>{$row["id"]}</td>
                    <td>{$row["title"]}</td>
                    <td>{$row["ISBN"]}</td>
                    <td>{$row["type"]}</td>
                    <td>{$row["author_last_name"]}</td>
                    <td>{$row["publisher_name"]}</td>
                    <td>Edit</td>
                    <td>Details</td>
                    <td>Delete</td>


                </tr>
            ";
        }
}else{
        $body.= "<tr><td colspan='9'>No results</td></tr>";
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
</head>

<body>
    <header>

       

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
                <th scope="col">Title</th>
                <!-- <th scope="col">Picture</th> -->
                <th scope="col">ISBN</th>
                <!-- <th scope="col">Description</th> -->
                <th scope="col">Type</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <!-- <th scope="col">Publisher Address</th> -->
                <!-- <th scope="col">Publishing Date</th> -->
                <th scope="col">Edit</th>
                <th scope="col">Details</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    echo $body
                ?>
            </tbody>
    </table>
</div>
    </header>
    <main>
    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>