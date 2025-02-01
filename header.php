<?php
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<header>
    <div class="navbar">
        <div class="nav-address border">
            <p class="add-first">Deliver to</p>
            <div class="add-icon">
                <i class="fa-solid fa-location-dot"></i>
                <p class="add-sec">India</p>
            </div>
        </div>
<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<div class="nav-signin border">
    <?php if ($username): ?>
        <p><span>Hello, <?php echo htmlspecialchars($username); ?></span></p>
        <p class="nav-second1"><a href="logout.php">Logout</a></p>
    <?php else: ?>
        <a href="login.php">
            <p><span>Hello, sign in</span></p>
            <p class="nav-second1">Account & Lists</p>
        </a>
    <?php endif; ?>
</div>


        <div class="nav-return border">
            <a href="buy_now.php">
            <p><span>Return</span></p>
            <p class="nav-second1">& Orders</p></a>
        </div>
        
        <div class="nav-cart border">
            <a href="cart.php">
            <i class="fa-solid fa-cart-shopping"></i>
            cart</a>
        </div>
    </div>

    <div class="panel">
        <div class="panel-all border">
            <a href="index.php">All</a>
        </div>
        <div class="panel-ops">
            <a href="gym.php"><p>GYM Section</p></a>
            <a href="student.php"><p>Study Material</p></a>
            <a href="car.php"><p>Automobile Shop</p></a>
            <a href="mobile.php"><p>Mobiles</p></a>
            <a href="ac.php"><p>Electronics</p></a>
            <a href="fashion.php"><p>Fashion</p></a>
            <a href="home.php"><p>Home Decores</p></a>
            <a href="plants.php"><p>Indoor plants</p></a>
        </div>
        <div class="panel-deals"></div>
    </div>
</header>
</body>
</html>
<?php
$is_logged_in = isset($_SESSION['username']); // Check if the user is logged in
?>
