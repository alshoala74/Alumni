<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="<?=PATH;?>front/css/all.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/hover-min.css" rel="stylesheet">
    <link href="<?=PATH;?>front/css/stylefont.css"rel="stylesheet">
    <link href="<?=PATH;?>front/css/particepent.css" rel="stylesheet">
    <link rel="icon" href="<?=PATH;?>front/img/icon.png" >
</head>
<body>

<!-- <header> -->
<section>
        <header class="navs">
            <img class="logo"src="<?=PATH;?>front/img/header-logo.svg" alt="img">
            <nav>
                <ul class="navlink">
                <li><a href="<?=PATH;?>user/index">Home</a></li>
                <li><a href="<?=PATH;?>user/alumni">Almunis</a></li>
                <li><a href="<?=PATH;?>user/jobbord">Job Board</a></li>
                </ul>
            </nav>
            <a href="<?=PATH;?>user/userprofile" >
            <img class="pfpimgb pfpimg hvr-grow" src="<?=PATH;?>front/img/<?php echo $data->pfp;?>" alt="pfp" onclick="showLogoutPopup()">
            </a>
        </header>
</section>
<!-- </header> -->
    
<!-- <Profile> -->
<div class="row">
    <div class="col-md-9 col-sm-10 mx-auto">
        <!-- <Profile widget> -->
        <div class="bg-white shadow rounded overflow-hidden card">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mt-2 mr-3"><img src="<?=PATH;?>front/img/<?php echo $data->pfp ?>" alt="" width="130" class="rounded-circle mb-2 pfp"></div>
                    <div class="media-body text-white">
                        <h4 class="mt-0 mb-0"><?php echo $data->username ?></h4>
                        <p class="small mb-0"><?php echo $data->email; ?></p>
                        <p class="small mb-0"><?php echo $data->id_num; ?></p>
                        <p class="small mb-2"><?php echo $data->major; ?></p>
                        <form action="<?= PATH; ?>user/postlogout" method="POST">
                    <button type="submit">Logout</button>
                        </form>
                    </div>
                    <!-- <div class="ml-auto main bg-dark">MORE
                        <div class="overlay">
                            <h2>bjhsabkrjn</h2>
                        </div>
                    </div> -->
                </div>

            </div>
            <!-- </Profile widget> -->   
            <!-- <Profile Posts> -->
            <div class="py-4 px-4">
                <div class="py-4">
                    <h5 class="mb-3">Recent posts :</h5>
                    <?php if (empty($chat)): ?>
                        <h3>No posts found</h3>
                    <?php else: ?>
                        <?php foreach(array_reverse($chat) as $pa): ?>
                            <div class="posts bg-light shadow-bg mb-3">
                                <i class="lnr lnr-chevron-down"></i>
                                <?php if ($pa['photo']) { ?>
                                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="<?=PATH;?>front/img/<?php echo $pa['photo']; ?>" alt="photo" class="img-fluid rounded shadow-sm"></div>
                                <?php } ?>  
                                <p class="font-italic mb-3"><?php echo nl2br($pa['body']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- </Profile Posts> -->
        </div>
    </div>
</div>
<!-- </Profile> -->

</body>
</html>