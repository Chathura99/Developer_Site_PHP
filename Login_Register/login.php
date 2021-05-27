<?php
	include "connect.php";
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Chathura</title>
</head>
<body>
        <div class="detail-container">
            <div class="notice">
            <?php
                if(isset($_POST['login'])){
                    $password=md5($_POST['password']);
                    $email=$_POST['email'];
                    $sql="select * from users where email='$email' and password='$password'";
                    $res=mysqli_query($conn,$sql);
                    if($conn){
                        if(mysqli_num_rows($res)==1){
                            echo "Login success";
                            $row=mysqli_fetch_assoc($res);
                            session_start();
                            $_SESSION['name']=$row['name'];
                            header("location:Chathura/webpage.php");
                        }else{
                            echo "Password or Email is wrong";
                        }
                    }
                }
            ?>
            </div>
        <form class="form-arrange" method="POST" action="">
            <h3>
                Login
            </h3>
            <label>Email<br></label><input type="email" placeholder="Email" name="email" required><br>
            <label>Password<br></label><input type="password" placeholder="Password" name="password" required><br>
            <br><div class="btn"><button name="login">Login</button></div><br><br>
            <label>Do you haven't an account.<a href="register.php">Register here...</a><br></label>
        </form>
        </div>
<div class="footer">
            <i class="fa fa-mobile-phone"></i>
            <i class="fa fa-whatsapp"></i>
            <a href="https://github.com/Chathura99"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/in/chathura-manohara-679b331a4"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.facebook.com/chathura.manohara.99/"><i class="fa fa-facebook"></i></a>
        </div>
</body>
</html>

