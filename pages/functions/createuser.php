<?php
include "../../config/includes.php";

if (isset($_POST['user_name']) && isset($_POST['user_age']) && isset($_POST['user_address'])) {
    $user_name = $_POST['user_name'];
    $user_age = $_POST['user_age'];
    $user_address = $_POST['user_address'];


    $sql = "INSERT INTO user(names, age, address) VALUES (:user_name, :user_age, :user_address)";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "user_name" => $user_name,
        "user_age" => $user_age,
        "user_address" => $user_address,
    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../dashboard.php' </script>";
    } else {
        echo "net save";
    }
}
 



