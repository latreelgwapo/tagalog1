<?php
if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script> alert('Username and Password is incorrect') </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Login</h1>
    <form action="functions/loginfunction.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" value="Login">Login</button> <br>
    </form>
    <?php
    $x = 10;
    $y = 15;
    $z = "hello world";
    ?>
</body>

</html>