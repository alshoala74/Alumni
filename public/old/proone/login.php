<?php
if(isset($_POST['email'])){
    session_start();
    $_SESSION['em']=$_POST['email']; 
    $_SESSION['pa']=$_POST['password']; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="css/stylefont.css" rel="stylesheet">
    <link href="css/stylelogin.css" rel="stylesheet">

<style>
    .error-message {
    margin-top:10px;
    font-size: 20px;
    text-decoration: underline;
}
</style>

</head>
<body>
    <section>
        <header class="navs">
            <img src="img/header-logo.svg" alt="img">
            <nav>
                <ul class="navlink">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="sucess.php">Sucess Story</a></li>
                    <li><a href="index.html#contact">Contact Us</a></li>
                </ul>
            </nav>
            <a class="hvr-grow"href="#"><button>Sign-In</button></a>
        </header>
    </section>

    <!--Login-->  
    <!--Login-->
<div class="loginform">
    <div class="logininfo">
        <h2>Login</h2>
        <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
            <div class="input-Email">
                <input name="email" id="email" type="email"><label>Email  <i class="lnr lnr-envelope"></i></label>
            </div>
            <div class="input-password">
                <input name="password" id="password" type="password"><label>Password <i class="lnr lnr-lock"></i></label>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forget password?</a>
            </div>

          
            <a href="Home.php?"><button type="submit" id="btn" value="Login" class="hvr-float-shadow">Login</button> </a>
        </form>
            <?php
            session_start();
            if (isset($_SESSION['errorMessage'])) {
                $errorMessage = $_SESSION['errorMessage'];
                echo "<h1 class='error-message'>$errorMessage</h1>";
                unset($_SESSION['errorMessage']); // Clear the error message
            }?>
       
    </div>
</div>

    <script src="js/login.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>