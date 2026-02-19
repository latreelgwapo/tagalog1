<?php
function retrieveALLuser()

{
    include "connection.php";

    $sql = "SELECT * FROM user";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchALL(PDO::FETCH_ASSOC);
}




function loginAuth($usernames, $passwords)
{

    include "connection.php";

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "username" => $usernames,
        "password" => $passwords

    ]);

    $count = $stmnt->rowCount();

    return $count;
}
function getUser($user_id)
{
    include "connection.php";

    $sql = "SELECT * FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $user_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function getProducts()
{
    include "connection.php";

    $sql = "SELECT * FROM  products";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}
// this is for updating user
function updateUser($user_id, $names, $age, $address, $usernames, $passwords)
{
    include "connection.php";

    $sql = "UPDATE user SET 
        username = :username,
        names= :names,
        age= :age, 
        address= :address,
        password= :password 
        WHERE 
        user_id =:user_id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "names" => $names,
        "age" => $age,
        "address" => $address,
        "username" => $usernames,
        "password" => $passwords,
        "user_id" => $user_id
    ]);

    return $stmnt;
}

// THIS is for updateprod
function updateproducts($prod_name, $prod_quantity, $prod_type, $prod_price, $prod_date_added,)
{
    include "connection.php";

    $sql = "UPDATE products SET 
        prod_name = :prod_name,
        prod_quantity= :prod_quantity,
        prod_type= :prod_type, 
        prod_price= :prod_price,
        prod_date_added= :prod_date_added 
        WHERE 
        prod_id =:prod_id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "prod_name" => $prod_name,
        "prod_quantity" => $prod_quantity,
        "prod_type" => $prod_type,
        "prod_price" => $prod_price,
        "prod_date_added" => $prod_date_added,
        "prod_id" => $prod_id
    ]);

    return $stmnt;
}



function deleteuser($id)
{
    include "connection.php";

    $sql = "DELETE FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $id

    ]);
    return $stmnt;
}

function deleteProduct($id)
{
    include "connection.php";

    $sql = "DELETE FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $id

    ]);
    return $stmnt;
}
