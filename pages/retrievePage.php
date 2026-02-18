<?php
include "../config/includes.php";
$list = retrieveALLuser();
$prod = getProducts();
// echo json_encode($list);

if($_GET['status'] == 'ok'){
echo "<script> alert('VALUE DELETED SUCCESFULLY')</script>";
}else if ($_GET['status'] == 'no'){
    echo "<script> alert('VALUE DELETED UNSUCCESFULLY')</script>";

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
    <!-- contents -->
    <h1>this a retrieve oy</h1>


    <table>

        <tr>
            <th>name</th>
            <th>age</th>
            <th>address</th>
            <th>username</th>
            <th>action</th>


        </tr>
        <?php
        foreach ($list as $item) {
        ?>
            <tr>
                <td><?= $item["names"] ?></td>
                <td><?= $item["age"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["username"] ?></td>
                <td><a href="viewPage.php?user_id=<?= $item['user_id'] ?>">view</a>
                    <a href="functions/deletefunction.php?deleteFrom=user&id=<?= $item['user_id'] ?>">Delete</a>

                </td>

            </tr>
        <?php
        }
        ?>

    </table>

    <table>

        <tr>
            <th>prod_name</th>
            <th>prod_quantity</th>
            <th>prod_type</th>
            <th>prod_price</th>
            <th>prod_date_added</th>


        </tr>



        <?php
        foreach ($prod as $item) {
        ?>
            <tr>
                <td><?= $item["prod_name"] ?></td>
                <td><?= $item["prod_quantity"] ?></td>
                <td><?= $item["prod_type"] ?></td>
                <td><?= $item["prod_price"] ?></td>
                <td><?= $item["prod_date_added"] ?></td>
                <td><a href="viewPageprod.php?prod_id=<?= $item['prod_id'] ?>">view</a>
                    <a href="functions/deletefunction.php?deleteFrom=product&id=<?= $item['prod_id'] ?>">delete</a>
                </td>



            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>