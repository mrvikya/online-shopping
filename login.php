<?php 
    include("connection.php");
    include("login1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1> 
        <form action="login1.php" method="post">
            <label>User Name</label>
            <input type="text"name="name" id="name" placeholder="Enter the name">
            <label>Password</label>
            <input type="password"name="password" id="password" placeholder="Enter the password">
            
            <input class="btn" type="submit" id="btn" value="Login" name = "submit"/> 
        </form>
        <p class="para" >Not have account? <a href="sign-up.php">Create account</a></p>

    </div>
    <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
</body>
</html>

