<?php
include('connection.php');  
require_once ('lib/sucess.php');
$story=story();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="css/stylefont.css"rel="stylesheet">
    <link href="css/stylesucess.css" rel="stylesheet">

</head>
<body>

        
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
        <a href="login.php" class="hvr-grow"><button>Sign-In</button></a>
  
      </header>

      
    <div class="container">
    <?php foreach($story as $st): ?>
        <div class="card">
            <div class="card-header">
              <img src="img/<?php echo $st['pic'];?>" alt="city" />
            </div>
            <div class="card-body">
                
            <h5><?php echo $st['name'];?></h5> 
            <p><?php echo $st['story'];?></p>
            </div>
        </div>

        <?php endforeach; ?>
        
    </div>
    
</body>
</html>