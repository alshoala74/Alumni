



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
    <link href="<?=PATH;?>front/css/stylenew.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
</head>
<body>

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

      

      <section class="cont">
        <?php if(isset($new)): ?>
          <h2><?php echo  $new->title; ?></h2>
          <h5><?php echo  $new->date; ?></h2>
              <img src="<?=PATH;?>front/img/<?php echo $new->pic; ?>">
          <p><?php  echo nl2br($new->disc); ?></p>
          
          <a href="<?=PATH;?>home/news" class="hvr-grow"><button>More News</button></a>

        <?php endif; ?>
      </section>

     

     
</body>
</html>