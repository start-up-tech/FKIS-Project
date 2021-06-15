<?php 

session_start();
$errors = [];
$username = "";

$db = mysqli_connect('localhost', 'root', '', 'fkisdb');

if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
 
  $query = "SELECT email FROM login WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO recoverpassword (email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);

    // Send email to user with the token in a link they can click on
    $to = $email;
    $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    mail($to, $msg);
    header('location: pending.php?email=' . $email);
  }
}

