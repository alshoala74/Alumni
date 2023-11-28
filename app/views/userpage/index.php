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
    <link href="<?=PATH;?>front/css/stylehome.css" rel="stylesheet">

    <link href="<?=PATH;?>front/img/icon.png" rel="icon">
</head>
<body>

<!-- <header> -->
<section>
        <header class="navs">
            <img class="logo"src="<?=PATH;?>front/img/header-logo.svg" alt="img">
            <nav>
                <ul class="navlink">
                <li><a href="<?=PATH;?>user/index">Alumni Community</a></li>
                <li><a href="<?=PATH;?>user/alumni">Alumni Directory</a></li>
                <li><a href="<?=PATH;?>user/jobbord">Job Board</a></li>
                </ul>
            </nav>
            <a href="<?=PATH;?>user/userprofile" >
            <img class="pfpimgb pfpimg hvr-grow" src="<?=PATH;?>front/img/<?php echo $data->pfp;?>" alt="pfp" onclick="showLogoutPopup()">
            </a>        
        </header>
</section>
<!-- </header> -->

<!-- <containers> -->
<section class="containers">

<!-- <addpost> -->
<div class="it1">
    <section class="comm">         
      <div class="container  py-5 text-dark">
        <div class="row  ">
          <div class="col-md-11 ">
            <div class="d-flex  mb-2">
              <img class="pfpimgb mr-2 hvr-grow"
                src="<?=PATH;?>front/img/<?php echo $data->pfp;?>" alt="avatar" width="65"
                height="65" />
              <div class="card w-100">
                <div class="card-body p-4">
                  
                  <form method="post" action="addpost" enctype="multipart/form-data">
                    <textarea name="body" class="form-control" id="textAreaExample" rows="5"></textarea>
                    <br>
                    <h5>Add Photo</h5>
                    <input type="file" name="photo" id="photo">
                    <img id="imagePreview" style="width: 100px; height: 100px;" />
                    <button name="inputchat" class="mt-4" type="submit">Post <i class="lnr lnr-location"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </section>
</div>
<!-- </addpost> -->

<!-- <events> -->
<div class="it2">
      <div class="container">
        <?php foreach($events as $ev): ?>
        <div class="row">
          <div class="col-4 text-right">
            <h1 class="display-4"><span class="badge badge-secondary"><?php echo $ev['formatted_day_number'];?></span></h1>
            <h2><?php echo $ev['formatted_month'];?></h2>
          </div>
          <div class="col-5">
            <h3 class="text-uppercase evname"><strong><?php echo $ev['eventname'];?></strong></h3>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $ev['formatted_day'];?></li>
              <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $ev['timestart'];?> - <?php echo $ev['timeend'];?></li>
              <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $ev['place'];?></li>
            </ul>
            <p><?php echo $ev['disc'];?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
</div>
<!-- </events> -->

<!-- <chats> -->
<div class="it3">
<h1 class="posthead">' Posts '</h1>
<?php if (empty($chats)): ?>
  <h3 style="margin-left: 100px;">No posts found</h3>
<?php endif; ?>
<?php foreach(array_reverse($chats) as $ch): ?>
  <?php if ($ch['username'] === $data->username): ?>
    <a style="text-decoration: none;" href="<?=PATH;?>user/userprofile">
  <?php else: ?>
    <a style="text-decoration: none;" href="<?=PATH;?>user/searchuserprofile/<?php echo $ch['username']; ?>">
  <?php endif; ?>
  <section  class="Posts">
    <div class="container  py-5 text-dark">
      <div class="row  ">
        <div class="col-md-11 ">
          <div class="d-flex  mb-2">
            <img class="pfpimgb hvr-grow mr-2"src="<?=PATH;?>front/img/<?php echo $ch['pfp'];?>" alt="avatar" width="65" height="65" />
            <div class="card hvr-float w-100">
              <div class="card-body p-4">
                <div  class="chat">
                  <h5 data-name class="mb-0"><?php echo $ch['username'];?></h5>
                  <h5 class="stuid"><?php echo $ch['id_num'];?></h5>
                  <!-- <p class="small">3 hours ago</p> -->
                  <p data-body>
                  <?php echo nl2br($ch['body']);?>
                  </p>
                  <?php if ($ch['photo']) { ?>
                    <img src="<?=PATH;?>front/img/<?php echo $ch['photo']; ?>" alt="photo"  />
                  <?php } ?>
                  
                      <!-- <a href="#!" class="postrect link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>5252</a>
                      <a href="#!" class="postrect link-muted"><i class="fas fa-thumbs-down me-1"></i>525</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </a>
<?php endforeach; ?>   
</div>
<!-- </chats> -->

</section>
<!-- </containers> -->



<script src="chat.js"></script>
</body>
</html>