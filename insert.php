<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['email']) || empty($_POST['password']))
        {
            echo '  
            
            ';
            if(isset($_POST)){
                echo "Email".$_POST['email']."<br> Password".$_POST['password'];
            }
        }
        else
        {
           
            $UserEmail = $_POST['email'];
            $UserPassword = $_POST['password'];

            $query = "INSERT INTO `records` (`UserEmail`, `UserID`, `password`) VALUES ('$UserEmail', NULL, '$UserPassword');";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>