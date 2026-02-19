   <!DOCTYPE html>
   <html>
 <link rel="stylesheet" href="../css/facebook.css">

   <head>
       <title>Create Account</title>

   </head>

   <body>

       <form method="../config/createacc.php" action="act7.php">
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
            <input type="confirm password" name="confirm password" placeholder="confirm password" required>
           
           <button type="submit" name="submit">Create New Account</button>
       </form>

   </body>

   </html>