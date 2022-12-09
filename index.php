
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midad Project</title>
    <link rel="stylesheet" href="css/indexStyle.css">
</head>
<body>
    <div class="box">
    <div class="back"><img src="img/background.jpg" alt=""></div>
    <form action="pageView1.php" method="post">
    <div class="form">
                <h2>LOGIN</h2>
                <input class="email" type="text" name="usernmae" placeholder="Enter Usrename">
                <input class="password" type="password" name="password" placeholder="Enter Password">
                <button class="btn1"><a href="pageView1.php">Login</a></button>
                <!--<button class="btn1" ><a href="">Login</a></button>-->
                <p class="link">Do not have an account ?<br>
                <a href="#">Sing up</a> here</p>
                <p class="liw">Log in with</p>
                <div class="icons">
                    <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://google.com/i/flow/login"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a>
                </div>
    </form>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>