<?php
    session_start();
        if(isset($_SESSION['name'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact</title>
</head>
<body>
        <div class="header">
            <img id="logo" src="Img/bluej.png" alt="logo">
            <ul id="nav">
                <li><a href="Webpage.php">Home</a></li> 
                <li><a href="services.php">Services</a></li> 
                <li><a href="contact.php">Contact</a></li>      
                <li><a href="about.php">About me</a></li> 
                <li><a href="blank"><input type="text" placeholder="Search.."><i class="fa fa-search" style="padding-left:5px;"></i></a></li> 
                <li><a href="../logout.php">Log out</a></li> 
            </ul>
        </div>
        <div class="content">
            <ul>
                <li>Contact me for place your orders and give your project</li>
                <li>Book your events like weddings, Birth day celebrations etc...</li>
            </ul>
            

        </div>
        <div class="contact-col">
            <p><i class="fa fa-mobile-phone"></i>Mobile : +94702534588</p>
            <p><i class="fa fa-whatsapp"></i>Whatsapp :+94702534588</p>
            <p><i class="fa fa-facebook"></i>Facebook : <a href="https://www.facebook.com/chathura.manohara.99/">Chathura Manohara</a></p>
            <p><i class="fa fa-linkedin"></i>Linkedin : <a href="https://www.linkedin.com/in/chathura-manohara-679b331a4">Chathura Manohara</a></p>
            <p><i class="fa fa-github"></i>Github : <a href="https://github.com/Chathura99">Chathura99</a></p>
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
<?php
}else{
    header("location:../login.php");
}
?>