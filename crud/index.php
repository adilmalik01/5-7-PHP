<?php
include("db.php");

$sql = "SELECT * FROM blogs";
$result = mysqli_query($connection, $sql);



if (isset($_GET["id"])) {
    $id = $_GET["id"];


    $sql = "DELETE FROM blogs WHERE Id = $id";
    $delete_result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error Delete Server";
    }
}



$connection->close();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.5rem;
            text-align: center;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            background-color: #fff;
            border-radius: 0 0 10px 10px;
        }

        .btn {
            margin-right: 5px;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .card-footer {
            text-align: center;
        }

        .btn-group {
            width: 100%;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container">
        <h1 class="my-4 text-center">All Blog Posts</h1>

        <div class="row">
            <?php foreach ($result as $post): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Blog Post
                            <h1></h1>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($post["title"]); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars(substr($post["content"], 0, 150)); ?>...</p>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group" role="group">

                                <a href="details.php?id=<?php echo htmlspecialchars($post["Id"]); ?>" class="btn btn-primary">View Details</a>


                                <a href="update_post.php?id=" class="btn btn-warning">Update</a>
                                <a href="index.php?id=<?php echo htmlspecialchars($post["Id"]); ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>