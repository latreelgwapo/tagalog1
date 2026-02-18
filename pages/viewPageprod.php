<?php
include "../config/includes.php";

if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];
  
} else {
    echo "<script> window.location.href='retrivePage.php'</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigation.php";
    ?>
    <form action="functions/updateuser.php"></form>
    <label for="prod_name">prod_name</label>
    <input name="prod_name" type="text" value="<?= $getprod[0]['prod_name'] ?>">

    <label for="prod_quantity">prod_quantity</label>
    <input name="prod_quantity" type="text" value="<?= $getprod[0]['prod_quantity'] ?>">

    <label for="prod_type">prod_type</label>
    <input name="prod_type" type="text" value="<?= $getprod[0]['prod_type'] ?>">

    <label for="prod_price">prod_price</label>
    <input name="prod_price" type="text" value="<?= $getprod[0]['prod_price'] ?>">

    <label for="prod_date_added">prod_date_added</label>
    <input name="prod_date_added" type="text" value="<?= $getprod[0]['prod_date_added'] ?>">

    <a href="">EDIT</a>
    </form>
</body>