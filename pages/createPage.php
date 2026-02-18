<!DOCTYPE html>
<html lang="en">

<?php
include "resources/header.php";
?>

<body>
    <?php
    include "resources/navigation.php";
    ?>
    <!-- contents -->
    <div>
        <h1>create FACEBOOK</h1>
       










































    </div>
    <div class="products ">
    <h1>products</h1>
    <form action="functions/createproducts.php" method="POST">
        <label for=""> prod name</label>
        <input type="text" name="prod_name">
        <label for="">prod quantity</label>
        <input type="number" name="prod_quantity">
        <label for="">prod type</label>
        <input type="text" name="prod_type">
        <label for="">prod price</label>
        <input type="number" name="prod_price">
         <label for="">prod date added</label>
         <input type="date" name="prod_date_added">
        <button>I LOVE YOU</button>
    </form>
</div>
</body>

</html>