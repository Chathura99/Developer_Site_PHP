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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Chathura</title>
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
        <div class="detail-container">
            <img id="me" src="Img/me2.jpeg" style="width:150px" alt="Chathura">
            <form class="form-arrange">
                <h3>
                    Register now...
                </h3>
                <label>Name</label><input type="text" placeholder="Your name" required>
                <label>Company</label><input type="text" placeholder="Company">
                <label>Email</label><input type="email" placeholder="Email" required>
                <label>Telephone</label><input type="text" placeholder="Telephone">
                <button>SUBMIT</button>
            </form>
        </div>
        <div class="morecontent"> 
            
        </div>
        <div class="content">
            <div id="skills">
                <h3>Skills</h3>
                Web development<br><progress value = "50" max = "100"></progress><br>
                Programming<br><progress value = "75" max = "100"></progress><br>
                Video editing<br><progress value = "65" max = "100"></progress><br>
                Photo editing<br><progress value = "80" max = "100"></progress><br>
                Graphic designing<br><progress value = "20" max = "100"></progress><br>
            </div>
        </div>
        <div class="content-services">
            <p><i class="fa fa-camera fa-4x"></i><br><span>Photography<br></span>Collect your memories like functions, wedddings , birthday parties</p>
            <p><i class="fa fa-html5 fa-4x"></i><br><span>Web development<br></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit.</p>
            <p><i class="fa fa-weibo fa-4x"></i><br><span>Gaming<br></span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.consectetur adipisicing elit.</p>
            <p><i class="fa fa-mobile-phone fa-4x"></i><br><span>Mobile development<br></span>Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit.</p>
            <p><i class="fa fa-apple fa-4x"></i><br><span>Another<br></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, eius.consectetur adipisicing elit.</p>
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