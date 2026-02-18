<?php
include "../../config/includes.php";

if (isset($_POST['prod_name']) && isset($_POST['prod_quantity']) && isset($_POST['prod_type']) && isset($_POST['prod_price']) && isset($_POST['prod_date_added'])) {
    $prod_name = $_POST['prod_name'];
    $prod_quantity = $_POST['prod_quantity'];
    $prod_type = $_POST['prod_type'];
    $prod_price = $_POST['prod_price'];
    $prod_date_added = $_POST['prod_date_added'];

    $sql = "INSERT INTO products(prod_name, prod_quantity, prod_type, prod_price, prod_date_added) 
    VALUES (
    :prod_name, 
    :prod_quantity, 
    :prod_type, 
    :prod_price, 
    :prod_date_added)";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "prod_name" => $prod_name,
        "prod_quantity" => $prod_quantity,
        "prod_type" => $prod_type,
        "prod_price" => $prod_price,
        "prod_date_added" => $prod_date_added
    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../dashboard.php' </script>";
    } else {
        echo "not save";
    }
}
