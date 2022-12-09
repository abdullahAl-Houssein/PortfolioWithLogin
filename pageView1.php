<?php
$un=$_POST['usernmae'];
$pas=$_POST['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--     Fonts    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/pageView1.css">

</head>
<body>
<!-- hedar section starts -->
<header>
    <div class="user">
        <img src="img/I.jpg" alt="">
        <h3 class="name"><?=$un;?></h3>
        <p class="post">Front end devlober</p>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</header>
                <!-- hedar section end -->
<div id="menu" class="fas fa-bars"></div>
            <!--Home section starts-->
<section class="home" id="home">
    <h3>Hi !</h3>
    <h1>I am <span><?=$un;?></span> </h1>
    <p>I am from Syria, from the city of Idlib, and I am currently residing in the city of Azaz, 
        studying the Faculty of Informatics Engineering at
         the International University for Science and Renaissance.</p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
</section>
        <!--Home section end-->
        <!--about section starts-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span> me</h1>
    <div class="row">
        <div class="info">
            <h3><span>name :</span><?=$un;?></h3>
            <h3><span>age :</span>22</h3>
            <h3><span>post :</span>Mobile Applction Devlopment</h3>
            <h3><span>language :</span>Arabic</h3>
            <a href=""><button class="btn">Download CV <i class="fas fa-user"></i></button></a>
        </div>
        <div class="counter">
            <div class="box">
                <span>2+</span>
                <h3>years of exprence</h3>
            </div>
        </div>
        <div class="counter">
            <div class="box">
                <span>100+</span>
                <h3>Project completed</h3>
            </div>
        </div>
        <div class="counter">
            <div class="box">
                <span>430+</span>
                <h3>happy clients</h3>
            </div>
        </div>
    </div>

</section>
        <!--about section end-->
        <!--education section starts-->
<section class="education" id="education">
    <h1 class="heading">my <span>education</span> </h1>
    <div class="box-containr">
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2021</span>
            <h3>front end devloper</h3>
            <p>I have participated in many training courses in addition 
                to my university and have designed good projects.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2022</span>
            <h3>mobile applction devlopment</h3>
            <p>I trained with the Turkish company Salam, and I had a subject in
                 the university on mobile applications.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2022</span>
            <h3>front end devloper</h3>
            <p>I trained with the Turkish company Salam, and I had a subject in
                 the university on mobile applications.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2022</span>
            <h3>Sonyor</h3>
            <p>I trained with the Turkish company Salam, and I had a subject in
                 the university on mobile applications.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2022</span>
            <h3>Data entry</h3>
            <p>I trained with the Turkish company Salam, and I had a subject in
                 the university on mobile applications.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2022</span>
            <h3>Data entry</h3>
            <p>I trained with the Turkish company Salam, and I had a subject in
                 the university on mobile applications.</p>
        </div>
    </div>
</section>
        <!--education section end-->
    <!--   jquery    -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--   file link js          -->
<script src="js/script.js"></script>
</body>
</html>