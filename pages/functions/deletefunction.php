<?php

include "../../config/includes.php";

if (isset($_GET['deleteFrom']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $from = $_GET['deleteFrom'];
    $status = false;


    if ($from = 'user') {
        $request = deleteuser($id);
        if ($request) {
            $status = true;
        }
    } else if ($from == 'product') {
        $request = deleteProduct($id);

        if ($request) {
            $status = true;
        }
    }
    if($status){
        echo "<script> window.location.href = '../retrievePage.php?status=ok' </script>";
    }else{
         echo "<script> window.location.href = '../retrievePage.php?status=no' </script>";
    }
}
