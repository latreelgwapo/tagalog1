<?php

include "../../config/includes.php"; 


if (isset($_POST['username']) && isset($_POST['password'])) {


  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = loginAuth($username, $password);

  if ($result >0) {
    echo "<script> window.location.href ='../dashboard.php'</script>";
  } else {
    echo "<script> window.location.href = '../login.php?status=false'</script>";
  }
}
?>