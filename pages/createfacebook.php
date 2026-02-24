   <!DOCTYPE html>
   <html>
   <link rel="stylesheet" href="../css/facebook.css">

   <head>
       <title>Create Account</title>

   </head>
   <?php
    include "resources/header.php";
    ?>

   <body>
       <?php
        include "../config/includes.php";
        ?>
        <form action="pages/functions/createfacebook.php" method="POST">
           <h2>Create New Account</h2>
           <input type="text" name="email" placeholder="Email or phone number" required>
           <input type="text" name="username" placeholder="Username" required>
           <input type="text" name="first_name" placeholder="First Name" required>
           <input type="text" name="last_name" placeholder="Last Name" required>
           <input type="text" name="mobile_num" placeholder="Mobile Number" required>
           <input type="date" name="birthday" required>
           <select name="gender" required>
               <option value="">Select Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Other">Other</option>
           </select>
           <input type="password" name="password" placeholder="password" required>
           <input type="confirm password" name="confirm_password" placeholder="confirm password" required>
           <button type="submit">Create New Account</button>
</form>
   </body>

   </html>