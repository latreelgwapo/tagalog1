
<?php
include "resources/header.php";
?>


<?php
include "resources/navigation.php";
?>
<h1>FACEBOOK</h1>
<form action="functions/createproducts.php" method="POST">
    <label for=""> username</label>
    <input type="text" name="username">
    <label for="">email</label>
    <input type="text" name="email">
    <label for="">Name</label>
    <input type="text" name="name">
    <label for="">mobile num.</label>
    <input type="number" name="mobile number">
    <label for="">birthday</label>
    <input type="date" name="birthday">
    <label for="">gender</label>
    <input type="number" name="gender">
    <label for="">password</label>
    <input type="text" name="password">
    <button>I LOVE YOU</button>
</form>