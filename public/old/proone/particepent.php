<?php
require_once 'lib/chat.php';
$part=particpent();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/hover-min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5fbbe9e138.js" crossorigin="anonymous"></script>
    <link href="css/particepent.css" rel="stylesheet">
     
    
    
    <title>Document</title>
</head>
<body>

<section>
    <header class="navs">
        <img src="img/header-logo.svg" alt="img">
        <nav>
            <ul class="navlink">
              <li><a href="Home.php">Home</a></li>
              <li><a href="particepent.php">Almunis</a></li>
              <li><a href="jobbord.html">Job Bords</a></li>
            </ul>
        </nav>
        <img class="pfpimg hvr-grow"src="img/<?php echo $_SESSION['pfp'];?>" alt="pfp">
    </header>
</section>

<section class="cont">
            <div class="search-wrapper"> 
                    <label for="search">Search Student</label>
                    <h3>Enter Name or Email</h3>
                    <div class="body2">
                <div class="box">
                    <input data-search type="search" class="input" name="txt" >
                    <i class="fas fa-search search-icon" ></i>
                </div>
                </div>
            </div>

           
                <div class="container">
                <?php foreach($part as $pa): ?>
                <a user-cards href="userprofile.php?user=<?php echo $pa['user_name']; ?>" class="user-cards" >
                <div class="card">
                    <img class="pfpimg hvr-grow" src="img/<?php echo $pa['pfp']; ?>" alt="pfp">
                    <div data-header class="header"><?php echo $pa['user_name']; ?></div>
                    <div data-body class="body"><?php echo $pa['email']; ?></div>
                    
                </div>
                </a>
                <?php endforeach; ?>
                </div>
            
</section>


<script src="js/Particpent.js"></script>


  
</body>
</html>