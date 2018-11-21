<?php  
include('header.php');
$connect = mysqli_connect("localhost", "root", "", "registration");
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$email = $row['email'];
?>
<!DOCTYPE html>  
<html>  
    <head>  
        <title>My Account</title>
        <style>
            body{
                background-color: #DCDCDC;
            }
            .acc{
                padding:50px;
                background-color: #faff82;
                border-radius:15px;
                width:250px;
                text-align:center;
                top:25px;
                margin:auto;
            } 
            #d{
                text-align:left;
            }  
        </style>
    </head>  
    <body>
        <div class='acc'>
            <div class='he'><h3> Account Details - </h3><br></div>
            <div id='b'>
            <?php

                echo "User ID - $id<br>";
                echo "Username - $username<br>";
                echo "Email - $email<br>";
            ?>
            </div>
        </div>
    </body>
</html>
        