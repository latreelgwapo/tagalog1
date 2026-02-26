 <?php

    include "../pages/functions/creatingface.php";

    $message = '';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $data = [
            'username'   => $_POST['username'],
            'first_name' => $_POST['first_name'],
            'last_name'  => $_POST['last_name'],
            'email'      => $_POST['email'],
            'password'   => $_POST['password'],
            'gender'     => $_POST['gender'],
            'birthday'   => $_POST['birthday'],
            'mobile_num' => $_POST['mobile_num'],
        ];

        if (registerUser($data)) {
            header('Location: Facebook.php?created=1');
            exit;
        } else {
            global $lastError;
            if ($lastError === 'duplicate') {
                echo "<script> alert('Username and email already exist') </script>";
            } elseif ($lastError === 'missing_required_fields') {
                echo "<script> alert('Please fill in all required fields') </script>";
            }
        }
    }
    ?>


 <!DOCTYPE html>
 <html>
 <link rel="stylesheet" href="../css/facebook.css">

 <head>
     <title>Create Account</title>

 </head>

 <body>

     <form action="pages/functions/createfacebook.php" method="POST">
         <h2>Create New Account</h2>
         <input type="text" name="email" placeholder="Email or phone number" required>
         <input type="text" name="username" placeholder="Username" required>
         <input type="text" name="first_name" placeholder="First Name" required>
         <input type="text" name="last_name" placeholder="Last Name" required>
         <input type="text" name="mobile_num" placeholder="Mobile Number" required>
         <label for="birthday">birthday</label>
         <input type="date" name="birthday" id="birhtday" required>
         <select name="gender" required>
             <option value="">Select Gender</option>
             <option value="Male">Male</option>
             <option value="Female">Female</option>
             <option value="Other">Other</option>
         </select>
         <input type="password" name="password" placeholder="password" required>
         <input type="confirm password" name="confirm_password" placeholder="confirm password" required>
         <input type="submit" class="btn" value="Sign Up">
     </form>
     <div class="jr">
         <a href="act7.php">nahimo na amaw</a>

     </div>
 </body>

 </html>