<?php

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author_name = $_POST["author_name"];
    $title = $_POST["title"];
    $content = $_POST["content"];


    $sql = "INSERT INTO blogs( title , author_name , content ) VALUES ( '$title', '$author_name', '$content') ";
    if($connection->query($sql) == true){
      echo "DATA INSERTED";
    }else{
      echo "DATA NOT INSERTED";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Blog Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header h2 {
            color: #343a40;
        }

        .form-control,
        .btn {
            font-size: 16px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php include("navbar.php") ?>

    <div class="form-container">
        <div class="form-header">
            <h2>Create New Blog Post</h2>
        </div>


        <form action="create.php" method="post">
            <div class="mb-3">
                <label for="author_name" class="form-label">Author Name</label>
                <input name="author_name" type="text" class="form-control" id="author_name" placeholder="Enter author's name" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter blog title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" rows="5" placeholder="Enter blog content" required></textarea>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>