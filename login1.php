<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE name = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        header("Location: index.php");
    } else {
        echo '<script>
                alert("Invalid username or password!");
                window.location.href = "login.php";
              </script>';
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Example: Assume you have validated the username & password from the database
    $username = $_POST['username']; // Get username from login form

    // Set session variable
    $_SESSION['username'] = $username;

    // Redirect to homepage or another page after login
    header("Location: index.php");
    exit();
}
?>
