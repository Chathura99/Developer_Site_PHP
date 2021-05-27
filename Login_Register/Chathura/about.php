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
    <title>About me</title>
</head>
<style>
body{
  background-color: #095c69;
}
* {
  box-sizing: border-box;
}
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}
.timeline p{
    font-weight: bold;
}
.timeline::after {
  content: '';
  position: absolute;
  width: 5px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}
.container {
  padding: 10px 40px;
  position: relative;
  width: 50%;
}
.container::after {
  content: '';
  position: absolute;
  width: 20px;
  height: 20px;
  right: -14px;
  background-color: white;
  border: 4px solid #4685d6;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}
.right::after {
    left: -14px;
}
.left {
  left: 0;
}
.right {
  left: 50%;
}
.content-t{
    display: grid;
    grid-template-rows: 1fr 1fr;
    background-color: white;
    position: relative;
    border-radius: 6px;
}
.content-t p,h2{
    margin: 5px;
}
@keyframes auto {
    0% {color: rgb(21, 19, 133);}
    50% {color: rgb(62, 40, 158);}
    100% {color: rgb(164, 185, 224);}
}
h2{
    animation-name: auto;
    animation-duration: 3s;
    animation-iteration-count: infinite;
}
</style>
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
            <div class="timeline">
                <div class="container left">
                  <div class="content-t">
                    <h2>2020 to now</h2>
                    <p>Undergraduate at University of Colombo School of Computing</p>
                  </div>
                </div>
                <div class="container right">
                    <div class="content-t">
                      <h2>2019-2020</h2>
                      <p>Works at Peoples Bank</p>
                    </div>
                  </div>
                <div class="container left">
                  <div class="content-t">
                    <h2>2018</h2>
                    <p>GCE Als in Mathematical Stream with AAB(Maliyadeva College)</p>
                    <ul>
                        <li>Combined Mathematic A</li>
                        <li>Chemistry A</li>
                        <li>Physics B</li>
                    </ul>
                  </div>
                </div>
                 <div class="container right">
                    <div class="content-t">
                      <h2>2015</h2>
                      <p>GCE Ols with A8 B1(Maliyadeva College)</p>
                    </div>
                  </div>
                  <div class="container left">
                    <div class="content-t">
                      <h2>2010 up</h2>
                      <p>Studied at Maliyadeva College Kurunegala</p>
                    </div>
                  </div>
                  <div class="container right">
                    <div class="content-t">
                      <h2>2005 up</h2>
                      <p>Studied at St/Bernadetts Model School Polgahawela</p>
                    </div>
                  </div>
                  <div class="container left">
                    <div class="content-t">
                      <h2>1999</h2>
                      <p>Born in 25 th of September 1999</p>
                    </div>
                  </div>
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