<?php 

include('connection.php');

if (isset($_POST['signup'])) {
    $username = $_POST['name'];
    $email = $_POST['Emailid'];
    $mobileno = $_POST['mobileno'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if passwords match BEFORE hashing
    if ($password !== $cpassword) {
        echo "<script>alert('Passwords do not match!');
            window.location.href='sign-up.php';
        </script>";
        return; // Stay on the same page
    }

    // Hash the password after validation
    //$hashedPassword = md5($password);

    // Check if email already exists
    $checkEmail = "SELECT * FROM signup WHERE Emailid='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "<script>
            alert('Email Address Already Exists!');
            window.location.href='sign-up.php';
        </script>";
        return;
    }

    // Check if username already exists
    $checkuser = "SELECT * FROM signup WHERE name='$username'";
    $result = $conn->query($checkuser);
    if ($result->num_rows > 0) {
        echo "<script>
            alert('Username Already Exists!');
            window.location.href='sign-up.php';
        </script>";
        return;
    } else {
        // Insert data into the database
        $insertQuery = "INSERT INTO signup(name, Emailid, mobileno, password) VALUES ('$username', '$email', '$mobileno', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>
                alert('Sign up successful! Redirecting to login page.');
                window.location.href='login.php';
            </script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
