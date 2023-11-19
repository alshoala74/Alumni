<?php
include('connection.php');
session_start();

if (isset($_POST['inputchat'])) {
  // Retrieve the value of the textarea using the $_POST superglobal
  $body = $_POST['body'];

  // Insert the value into the database using the appropriate SQL query
  $username = $_SESSION['user_name'];
  $photo = $_FILES['photo'];
  $photo_name = $photo['name'];
  $photo_tmp = $photo['tmp_name'];

  $photo_destination = 'img/' . $photo_name;
  move_uploaded_file($photo_tmp, $photo_destination);
  $query = "INSERT INTO `chat` (`username`, `body`, `photo`) VALUES ('$username', '$body', '$photo_name')";
  mysqli_query($con, $query);
}

// Redirect back to the home page
header('Location: Home.php');
exit;
?>