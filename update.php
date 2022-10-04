<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserEmail = $_POST['email'];
        $UserPassword= $_POST['password'];

                                        $UserName = $row['UserName'];
        $query = "UPDATE `records` SET `password` = '$UserPassword', `UserEmail` = '$UserEmail' WHERE `records`.`UserID` = $UserID;";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>