




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    <link href="<?=PATH;?>front/css/all.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/hover-min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/stylefont.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/stylelogin.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >

<style>
    .error-message {
        z-index: 100;
    font-size: 1em;
    margin-bottom:20px;
    text-decoration: underline;
}
</style>

</head>
<body>
 <!--header-->
 <section>
 <header class="navs">
      <img class="logo"src="<?=PATH;?>front/img/header-logo.svg" alt="img">
      <nav>
        <ul class="navlink">
          <li><a href="<?=PATH;?>home">Home</a></li>
          <li><a href="<?=PATH;?>home/news">News</a></li>
          <li><a href="<?=PATH;?>home/sucess">Success Stories</a></li>
          <li><a href="<?=PATH;?>home/events">Events</a></li>
          <li><a href="<?=PATH;?>home/more">More</a></li>
        </ul>
      </nav>
      <a href="<?=PATH;?>home/login" class="hvr-grow"><button>Sign-In</button></a>
</header>
</section>

    <!--Login-->  
    <!--Login-->
<div class="loginform">
    <div class="logininfo">
        <h2>Login</h2>
        <form action="postlogin" method="post">
            <!-- Add a container for the error message -->
            <div id="error-message-container">
                <?php if(isset($error_message)) { ?>
                    <h1 class="error-message"><?= $error_message; ?></h1>
                <?php } ?>
            </div>
            <div class="input-Email">
                <input name="email" id="email" type="email" required><label>Email  <i class="lnr lnr-envelope"></i></label>
            </div>
            <div class="input-password">
                <input name="password" id="password" type="password" required><label>Password <i class="lnr lnr-lock"></i></label>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forget password?</a>
            </div>

          
            <button type="submit" id="btn" value="Login" class="hvr-float-shadow">Login</button>
        </form>
    </div>
</div>

    <script src="<?=PATH;?>front/js/login.js"></script>
    <script src="<?=PATH;?>front/js/script.js"></script>
    <script src="<?=PATH;?>front/js/jquery-3.6.4.min.js"></script>
    <script src="<?=PATH;?>front/js/bootstrap.bundle.min.js"></script>
</body>
</html>
