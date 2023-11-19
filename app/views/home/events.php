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
    <link href="<?=PATH;?>front/css/events.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?=PATH;?>front/css/all.css" />
	  <link type="text/css" rel="stylesheet" href="<?=PATH;?>front/css/font-awesome.min.css" />
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
</section>


<section class="containers">


<?php foreach($data as $n): ?> 
    <div class="it2">
      <div class="container">
        <div class="row row-striped">
          <div class="col-2 text-right">
            <h1 class="display-4"><span class="badge badge-secondary"><?= $n['formatted_day_number']?></span></h1>
            <h2><?= $n['formatted_month']?></h2>
          </div>
          <div class="col-9 ev">
            <h3 class="text-uppercase"><strong><?= $n['eventname']?></strong></h3>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?= $n['formatted_day']?></li>
              <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?=  $n['timestart'];?> - <?= $n['timeend'];?></li>
              <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?= $n['place']?></li>
            </ul>
            <p><?= $n['disc']?></p>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?> 
    


</section>


</body>
</html>