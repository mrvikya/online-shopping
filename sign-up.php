<?php 
    include("connection.php");
    include("signup.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <div class="sign-up">
    <h1>Sign Up</h1>
    <form method="post" action="signup.php">
        
        <label>User Name</label>
        <input type="text" name="name" id="name" placeholder="Enter the name">
        <label>Email Id</label>
        <input type="email" name="Emailid" id="Emailid" placeholder="enter the email id">
        <label>Mobile Number</label>
        <input type="text"name="mobileno" id="mobileno" maxlength="10" onkeypress="return"placeholder="Enter mobile number">
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Enter the password">
        <label>Confirm Password</label>
        <input type="password" name="cpassword" id="cpassword" placeholder="Enter the password">
        
        <input class="btn" type="submit" id="btn" value="Sign up" name = "signup"/> 
    </form>
    <p class="para">Alrady have an account <a href="login.php">Sign in Here</a></p>
    </div>
   
</body>
</html>