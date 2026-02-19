 <?php

include "../../config/include.php";

if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['first_name']) 
    && isset($_POST['last_name']) && isset($_POST['mobile_num']) 
    && isset($_POST['birthday']) && isset($_POST['gender']) 
    && isset($_POST['password']) && isset($_POST['confirm password'])) {

    $user_name  = $_POST['username'];
    $email      = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $mobile_number = $_POST['mobile_num'];
    $birthday = $_POST['birthday'];
    $gender     = $_POST['gender'];
    $password   = $_POST['password'];
    $confirm    = $_POST['confirm password'];

    if ($password != $confirm) {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
        exit();
    }

    $sql = "INSERT INTO account
            (username, email, first_name, last_name, mobile_num, birthday, gender, password)
            VALUES 
            (:username, :email, :first_name, :last_name, :mobile_num, :birthday, :gender, :password)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        "username"   => $user_name,
        "email"      => $email,
        "first_name" => $first_name,
        "last_name"  => $last_name,
        "mobile_num" => $mobile_number,
        "birthday"  => $birthday,
        "gender"     => $gender,
        "password"   => $password
    ]);
}
?>