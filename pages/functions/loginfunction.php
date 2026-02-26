<?php

include "../config/includes.php";


if (isset($_POST['username']) && isset($_POST['password'])) {


  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = loginAuth($username, $password);

  if ($result > 0) {
    echo "<script> window.location.href ='../dashboard.php'</script>";
  } else {
    echo "<script> window.location.href = '../login.php?status=false'</script>";
  }
}
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include "../config/includes.php";
if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $result = loginAuth($email, $password);

  if ($result > 0) {
    header('Location: pages/dashboard.php');
    exit;
  } else {
    header('Location: act7.php?status=false');
    exit;
  }
} else {
  header('Location: act7.php');
  exit;
}
















?>