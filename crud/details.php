<?php
include("db.php");




if (isset($_GET["id"])) {
    $id = $_GET["id"];


    $sql = "SELECT * FROM `blogs` WHERE Id = $id";

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

}


$connection->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .post {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 20px 0;
        }

        .post h2 {
            margin: 0;
            color: #333;
        }

        .post .author {
            font-size: 14px;
            color: #555;
        }

        .post .content {
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>

<body>
    <?php include("navbar.php") ?>
    <h1>Deatils Page</h1>

    <div class="post">
        <h2>Title: <?php echo $row["title"] ?></h2>
        <p class="author">Author: <?php echo $row["author_name"] ?></p>
        <div class="content">
            <p><?php echo $row["content"] ?></p>
        </div>
    </div>




</body>

</html>