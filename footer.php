<?php
$is_logged_in = isset($_SESSION['username']); // Check if logged in
?>

<?php if ($is_logged_in): ?>
  <div class="logout">
    <?php echo htmlspecialchars($_SESSION['username']); ?>? <a href="logout.php">Log out</a>
  </div>
<?php endif; ?>

<div class="row back" onclick="window.scrollTo(0, 0);">
  <p>Go to Top</p>
</div>

<?php if ($is_logged_in): ?>
  <div class="welcome">
    <h2>Welcome Back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
  </div>
<?php else: ?>
  <div class="sign_in">
    <p>See personalized recommendations</p>
    <a href="login.php">
      <button>Sign in</button>
    </a>
    <p>New Customer? <a href="sign-up.php">Start here</a></p>
  </div>
<?php endif; ?>
