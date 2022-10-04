<?php

require_once("connection.php");
$query = " SELECT * FROM `records` ";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css" />
    <title>View Records</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td> User ID </td>

                            <td> User Email </td>
                            <td> User Password </td>
                            <td> Edit </td>
                            <td> Delete </td>
                        </tr>

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            $UserID = $row['UserID'];
                            $UserEmail = $row['UserEmail'];
                            $UserPassword = $row['password'];
                        ?>
                            <tr>
                                <td><?php echo $UserID ?></td>

                                <td><?php echo $UserEmail ?></td>
                                <td><?php echo $UserPassword ?></td>
                                <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>