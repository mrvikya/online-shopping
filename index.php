<?php

// Check if the user is logged in
$is_logged_in = isset($_SESSION['user_id']); // Assuming 'user_id' is set when the user logs in.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amazon</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="slider.css">
</head>
<body>
<?php include("header.php"); ?>


<div class="slider">
  <figure>
    <div class="slide">
      <img src="home/hero.jpg" alt="hero img">
    </div>
    <div class="slide">
      <img src="home/hero1.jpg" alt="hero img">
    </div>
    <div class="slide">
      <img src="home/hero2.jpg" alt="hero img">
    </div>
    <div class="slide">
      <img src="home/hero3.jpg" alt="hero img">
    </div>
  </figure>
</div>

<form action="" method="post">
  <!-- Your existing shop-section and other content goes here -->
  <div class="shop-section">
    
    <div class="box">
      <div class="box-content">
        <h2>Start your fitness journey </h2>
        <a href="gym.php">
       <div class="box-img" style="background-image: url('home/box1.jpg')";></div>
       <p href="gym.php">See More</p></a>
      </div>
    </div>
    
    <div class="box">
      <div class="box-content">
        <h2>Car,bike parts & accessories</h2>
        <a href="car.php">
        <div class="box-img" style="background-image: url('home/box2.jpg')";></div>
       <p>See More</p></a>
      </div>
    </div>
      
    <div class="box">
      <h2>Home decores</h2>
      <div class="image-container">
        <div class="image-box">
          <a href="home.php" >
          <img src="home/box3_1.jpg" alt="Image 1">
          <p>Cushion covers, bedsheets & more</p></a>
        </div>
        <div class="image-box row" >
          <a href="home.php#div2">
          <img src="home/box3_2.jpg" alt="Image 2">
          <p>Figurines,vases & more</p></a>
        </div>
        <div class="image-box">
          <a href="home.php#div3">
          <img src="home/box3_3.jpg" alt="Image 3">
          <p>Home storage</p></a>
        </div>
        <div class="image-box">
          <a href="home.php#div4">
          <img src="home/box3_4.jpg" alt="Image 4">
          <p>Lighting solutions</p></a>
        </div>
      </div>
      <div class="box-content">
        <p>See more</p>
      </div>
    </div>

    <div class="box">
      <div class="box-content">
        <h2>Air Conditioner</h2>
        <a href="ac.php">
        <div class="box-img" style="background-image: url('home/ac1.jpg')";></div>
       <p>See More</p></a>
      </div>
    </div>
  </div>

   
  <div class="image-container-home">
    <div class="image-box-home" name="presto" id="1" >
      <img src="home/2.1.jpg" alt="Image 1">
        <div class="AddToCart">
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="1"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="1"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Presto">
            <input type="hidden" name="item_price" value="999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home" name="mixer" id="2" >
      <img src="home/2.2.jpg" alt="Image 2">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="2"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="2"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Mixer">
            <input type="hidden" name="item_price" value="1999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home" name="grander" id="3" >
      <img src="home/2.3.jpg" alt="Image 3">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="3"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="3"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Grander">
            <input type="hidden" name="item_price" value="500">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/2.4.jpg" alt="Image 4">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="4"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="4"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Bed">
            <input type="hidden" name="item_price" value="20999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/2.5.jpg" alt="Image 5">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="5"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="5"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Tharmas">
            <input type="hidden" name="item_price" value="399">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/2.6.jpg" alt="Image 6">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="6"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="6"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Bedshit">
            <input type="hidden" name="item_price" value="899">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
  </div>
  
  
  
  
  
  
  <div class="shop-section">
    
    <div class="box">
      <div class="box-content">
        <h2>Mobile </h2>
        <a href="mobile.php">
        <div class="box-img" style="background-image: url('home/box24.jpg')";></div>
       <p>See More</p></a>
      </div>
    </div>
   
    <!-- <div class="box">
      <div class="box-content">
        <h2>Indoor plants</h2>
        <a href="plants.php">
       <div class="box-img" style="background-image: url('home/box23.jpg')";></div>
       <p>See More</p></a>
      </div>
    </div> -->
    <div class="box">
      <h2>Indoor plants</h2>
      <div class="image-box1">
        <a href="plants.php">
        <img src="home/box23.jpg" alt="Image 1">
        <p>See more</p></a>
      </div>
    </div>

    
    <div class="box">
      <h2>Pocket-friendly fashion</h2>
      <div class="image-container">
        <div class="image-box">
          <a href="fashion.php">
          <img src="home/box21_1.jpg" alt="Image 1">
          <p>Fashion for men</p></a>
        </div>
        <div class="image-box">
          <a href="fashion.php#div2">
          <img src="home/box21_2.jpg" alt="Image 2">
          <p>Watch & Wallet</p></a>
        </div>
        <div class="image-box">
          <a href="fashion.php#div3">
          <img src="home/box21_3.jpg" alt="Image 3">
          <p>Shose & Sliper</p></a>
        </div>
        <div class="image-box">
          <a href="fashion.php#div4">
          <img src="home/box21_4.jpg" alt="Image 4">
          <p>fashion for Women</p></a>
        </div>
      </div>
      <a href="fashion.php">
      <p>See More</p></a>
    </div>

    <div class="box">
      <h2>Study Material</h2>
      <div class="image-box1">
        <a href="student.php">
        <img src="home/box22_1.jpg" alt="Image 1">
        <p>See more</p></a>
      </div>
    </div>
  </div> 



  <div class="image-container-home">
    <div class="image-box-home">
      <img src="home/box3.6.jpg" alt="Image 1">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="7"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="7"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="T-poy">
            <input type="hidden" name="item_price" value="4599">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/box3.1.jpg" alt="Image 2">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="8"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="8"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="T-poy">
            <input type="hidden" name="item_price" value="3999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/box3.2.jpg" alt="Image 3">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="9"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="9"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Book rack">
            <input type="hidden" name="item_price" value="8999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/box3.3.jpg" alt="Image 4">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="10"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="10"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Book rack">
            <input type="hidden" name="item_price" value="5999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/box3.4.jpg" alt="Image 5">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="11"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="11"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Sofa with T-poy">
            <input type="hidden" name="item_price" value="12000">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
    <div class="image-box-home">
      <img src="home/box3.5.jpg" alt="Image 6">
      <div class="AddToCart">
      <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="12"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="12"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Sofa">
            <input type="hidden" name="item_price" value="10000">
            <button class="buy" type="submit">Buy Now</button>
        </form>
        </div>
    </div>
  </div>
  </div>
</form>
</form>

<br><br><hr><br>
<?php include("footer.php"); ?>
</body>
</html>
