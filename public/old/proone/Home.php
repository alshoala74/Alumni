<?php
include('connection.php');  
require_once ('lib/chat.php');
require_once ('events.php');
$chat=chats();
$event=events();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="css/stylefont.css"rel="stylesheet">
    <link href="css/stylehome.css" rel="stylesheet">

    <link href="img/icon.png" rel="icon">
</head>
<body>
  
    <!--header-->
 <section>
    <header class="navs">
      <img src="img/header-logo.svg"  alt="img">
      <nav>
        <ul class="navlink">
          <li><a href="#home">Home</a></li>
          <li><a href="particepent.php">Almunis</a></li>
          <li><a href="jobbord.html">Job Bords</a></li>
          <!-- <li><a href="#">Events</a></li> -->
        </ul>
      </nav>
      <img class="pfpimgb pfpimg hvr-grow" src="img/<?php echo $_SESSION['pfp'];?>" alt="pfp" onclick="showLogoutPopup()">
      
      

    </header>

    
</section>


<section class="containers">

    <div class="it1">
    
    <section class="comm">         
      <div class="container  py-5 text-dark">
        <div class="row  ">
          <div class="col-md-11 ">
            <div class="d-flex  mb-2">
              <img class="pfpimgb mr-2 hvr-grow"
                src="img/<?php echo $_SESSION['pfp'];?>" alt="avatar" width="65"
                height="65" />
              <div class="card w-100">
                <div class="card-body p-4">
                  
                  <form method="post" action="Savechat.php" enctype="multipart/form-data">
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
    
    <div class="it2">
      <div class="container">
        <?php foreach($event as $ev): ?>
        <div class="row">
          <div class="col-2 text-right">
            <h1 class="display-4"><span class="badge badge-secondary"><?php echo $ev['day_month'];?></span></h1>
            <h2><?php echo $ev['month'];?></h2>
          </div>
          <div class="col-5">
            <h3 class="text-uppercase"><strong><?php echo $ev['eventname'];?></strong></h3>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $ev['day_of_week'];?></li>
              <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $ev['timestart'];?> - <?php echo $ev['timeend'];?></li>
              <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $ev['place'];?></li>
            </ul>
            <p><?php echo $ev['disc'];?></p>
          </div>
        </div>
        <?php endforeach; ?>
        

      </div>
    </div>



    <div class="it3">
      <h1 class="posthead">' Posts '</h1>



        <!-- <section chat-contenir class="Posts">
        </section> -->

      <?php $chat = array_reverse($chat); ?>
<?php foreach($chat as $ch): ?>
<!-- <template chat-template>  -->
  <section  class="Posts">
    <div class="container  py-5 text-dark">
      <div class="row  ">
        <div class="col-md-11 ">
          <div class="d-flex  mb-2">
            <img class="pfpimgb hvr-grow mr-2"src="img/<?php echo $ch['pfp'];?>" alt="avatar" width="65" height="65" />
            <div class="card hvr-float w-100">
              <div class="card-body p-4">
                <div  class="chat">
                  <h5 data-name><?php echo $ch['user_name'];?></h5>
                  <!-- <p class="small">3 hours ago</p> -->
                  <p data-body>
                  <?php echo $ch['body'];?>
                  </p>
                  <?php if ($ch['photo']) { ?>
                    <img src="img/<?php echo $ch['photo']; ?>" alt="photo" width="300" height="200" />
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
<!-- </template> -->
       <?php endforeach; ?>
       
    </div>

    <!-- <div class="it4"></div> -->

    
    
</section>


<script>
const fileInput = document.getElementById("photo");
const imagePreview = document.getElementById("imagePreview");

fileInput.addEventListener("change", function() {
  const file = fileInput.files[0];
  const reader = new FileReader();

  reader.onload = function() {
    imagePreview.src = reader.result;
  };

  reader.readAsDataURL(file);
});



</script>

<script>
  function showLogoutPopup() {
    document.getElementById("logoutPopup").style.display = "block";
  }

  function hideLogoutPopup() {
    document.getElementById("logoutPopup").style.display = "none";
  }

  function logout() {
    // Perform logout actions here
    // For example, redirect to a logout page or clear session data
    // You can customize this function based on your specific requirements
    console.log("Logout action");
  }
</script>


<script src="chat.js"></script>

</body>
</html>