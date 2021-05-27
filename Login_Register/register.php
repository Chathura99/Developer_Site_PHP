<?php
	include "connect.php";
    error_reporting(0);
    session_start();
    if(isset($_SESSION['name'])){
        header("location:login.php");
    }
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
            if(isset($_POST['register'])){
                $name=$_POST['name'];
                $password=md5($_POST['password']);
                $cpassword=md5($_POST['cpassword']);
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $company=$_POST['company'];
                if(!$conn){
                    echo "Server error!";
                }else{
                    $sql="select * from users where email='$email'";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)>0){
                        echo "Email already exists!";
                    }else{
                        if($password==$cpassword){
                            $sql1="Insert into users (name,email,password,date,company,telephone) values ('$name','$email','$password','2020-12-12','$company','$phone')";
                            $res1=mysqli_query($conn,$sql1);
                            if($res1){
                                echo "Registration Successfull";
                            }else{
                                echo "Something went wrong!";
                            }
                        }else{
                            echo "Password doesn't match";
                        }
                    }
                }
             }
             ?>
             
            </div>
            <form class="form-arrange" method="POST" action="">
                <h3>
                    Register
                </h3>
                <label>Name<br></label><input type="text" name="name" placeholder="Your name" required><br>
                <label>Company<br></label><input type="text"name="company" placeholder="Company"><br>
                <label>Email<br></label><input type="email" name="email"placeholder="Email" required><br>
                <label>Telephone<br></label><input type="text"name="phone" placeholder="Telephone"><br>
                <label>Password<br></label><input type="password" name="password" placeholder="Password" required><br>
                <label>Confirm password<br></label><input type="password" name="cpassword" placeholder="Re-enter password" required><br>
                <div class="btn" ><button name="register">Register</button></div><br>
                <label>Do you have an account.<a href="login.php">Login here...</a><br></label>
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

