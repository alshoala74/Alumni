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
    <link href="<?=PATH;?>front/css/stylefont.css"rel="stylesheet">
    <link href="<?=PATH;?>front/css/more.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?=PATH;?>front/css/all.css" />
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
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
    <section class="content">
      <div class="lyr">
        <div class="container text-center content d-flex justify-content-center align-items-center content">
          <div>
                <h2>Donation</h2>
                <p>Alone we can do so little togather we can do so much.</p>
                <a class="hvr-grow"href="https://quickpay.utb.edu.bh/">Donate</a>
          </div>
         </div>
         </div>
        </div>
    </section>
</section>


  <div class="container">
  <?php foreach($servay as $serv): ?>
        <div class="item item1">
            <h2><?php echo $serv['survey_name'];?></h2>
            <p><?php echo $serv['survey_description'];?></p>
            <button ><a style="color:white;"href="<?=PATH;?>home/servay/<?php echo $serv['survey_id'];?>">Start</a></button>
        </div>
<?php endforeach; ?>


    
    
</div>



 

</body>
</html>