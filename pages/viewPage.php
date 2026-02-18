<?php
include "../config/includes.php";

if (isset($_GET['prod_id'])) {
   $prod_id = $_GET['prod_id'];
} else {
    echo "<script> window.location.href='../retrivePage.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<?php
include "resources/header.php";
?>

<body>
    <form action="functions/updateuser.php" method="POST">
    <h1>View and Update Page</h1>
    <label for="names">Name</label> 
    <input name="names" type="text" value="<?= $getUser[0]['names'] ?>"> 
    <label for="age">Age</label> 
    <input name="age" type="text" value="<?= $getUser[0]['age'] ?>">
    <label for="address">Address</label> 
    <input name="address" type="text" value="<?= $getUser[0]['address'] ?>"> 
    <label for="username">Username</label> 
    <input name="username" type="text" value="<?= $getUser[0]['username'] ?>">
    <label for="password">Password</label> 
    <input name="password" type="text" value="<?= $getUser[0]['password'] ?>">

    <input name="user_id" type="text" value="<?= $getUser[0]['user_id'] ?>" hidden>

    <button>edit</button>
</form>

</body>