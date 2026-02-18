<?php
include "../../config/includes.php";

if (isset($_POST['prod_id'])) {

    $names = $_POST['prod_name'];
    $age = $_POST['prod_quantity'];
    $address = $_POST['prod_type'];
    $username = $_POST['prod_price'];
    $password = $_POST['prod_date_added'];
    $user_id = $_POST['prod_id'];


    $result = updateUSer($prod_id, $prod_name, $prod_quantity, $prod_type, $prod_price, $prod_date_added);

    if($result){
        echo "<script> window.location.href='../retrievePage.php' </script>";
    }else{
        echo "<script> window.location.href='../viewPage.php?user_id'".$prod_id." ' </script>";
    }
}else{
    echo "<script> window.location.href='../retrievePage.php' </script>";

}
?>