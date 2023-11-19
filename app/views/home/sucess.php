


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>

    <link href="<?=PATH;?>front/css/all.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/hover-min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/stylefont.css"rel="stylesheet">
    <link href="<?=PATH;?>front/css/stylesucess.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
</head>
<body>

        
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

      
    <div class="container">
    <?php foreach($story as $st): ?>
        <div class="card">
            <div class="card-header">
              <img src="<?=PATH;?>front/img/<?php echo $st['pic'];?>" alt="city" />
            </div>
            <div class="card-body">
                
            <h5><?php echo $st['name'];?></h5> 
            <h3 class="details">><?php echo $st['workplace'];?> <br> ><?php echo $st['degree'];?> </h3>
            
            <p><?php echo nl2br($st['story']);?></p>
            </div>
        </div>

        <?php endforeach; ?>
        
    </div>
    
</body>
</html>