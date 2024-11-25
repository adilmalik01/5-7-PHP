<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML || TABLE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>



    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Email</th>
                <th scope="col">Student Age</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $students_data = array(
                array(
                    "id" => 1,
                    "name" => "ali",
                    "email" => "ali@gmail.com"

                ),
                array(
                    "id" => 2,
                    "name" => "adil",
                    "email" => "adil@gmail.com"
                ),
                array(
                    "id" => 3,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),

                array(
                    "id" => 4,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),

                array(
                    "id" => 5,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),
                array(
                    "id" => 6,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),
                array(
                    "id" => 7,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),

                array(
                    "id" => 8,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),

                array(
                    "id" => 9,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),
                array(
                    "id" => 10,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),
                array(
                    "id" => 8,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),

                array(
                    "id" => 9,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                ),
                array(
                    "id" => 10,
                    "name" => "hamza",
                    "email" => "hamza@gmail.com"
                )

            );


            ?>



            <?php foreach ($students_data as $student): ?>
                <tr>
                    <th scope='row'> <?php echo $student["id"] ?> </th>
                    <td> <?php echo $student["name"] ?> </td>
                    <td> <?php echo $student["email"] ?> </td>
                    <td> 20</td>
                </tr>
            <?php endforeach; ?>




        </tbody>
    </table>
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>