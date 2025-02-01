<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include("header.php");?> 
     
    <div class="slider">
        <figure>
            <div class="slide">
                <img src="car/hero-car.4.gif"alt="hero img">
            </div>
            <div class="slide">
                <img src="car/hero-car.3.jpg"alt="hero img">
            </div>
    
            <div class="slide">
                <img src="car/hero-car.2.jpg"alt="hero img">
            </div>
        
            <div class="slide">
                <img src="car/hero-car.1.jpg"alt="hero img">
            </div>
        </figure>
    
    </div>
    <div class="shop-section">
    
        <div class="box1 box">
          <div class="box-content1">
            <h2></h2>
           <div class="box-img" style="background-image: url('car/car.1.jpg')";></div>
           <pre>Arm slevees &                     $=1599
balaclave</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="21"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="21"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Arm slevees & balaclave">
            <input type="hidden" name="item_price" value="1599">
            <button class="buy" type="submit">Buy Now</button>
        </form>
          </div>
        </div>
        <div class="box1 box">
            <div class="box-content1">
              <h2></h2>
             <div class="box-img" style="background-image: url('car/car.2.jpg')";></div>
             <pre>Bike Cover                          $=599</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="22"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="22"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Bike Cover">
            <input type="hidden" name="item_price" value="599">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
              <h2></h2>
             <div class="box-img" style="background-image: url('car/car.3.jpg')";></div>
             <pre>Saddle bags                         $=1099</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="23"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="23"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Saddle Bags">
            <input type="hidden" name="item_price" value="1099">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
              <h2> </h2>
             <div class="box-img" style="background-image: url('car/car.4.jpg')";></div>
             <pre>Seat cover                         $=1599</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="24"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="24"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Seat cover">
            <input type="hidden" name="item_price" value="1599">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
    </div>
    <div class="shop-section">
    
        <div class="box1 box">
          <div class="box-content1">
           <div class="box-img" style="background-image: url('car/car.5.jpg')";></div>
           <pre>Dashboard accessories        $=495</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="25"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="25"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Dashboard accessories">
            <input type="hidden" name="item_price" value="495">
            <button class="buy" type="submit">Buy Now</button>
        </form>
          </div>
        </div>
        <div class="box1 box">
            <div class="box-content1">
             <div class="box-img" style="background-image: url('car/car.6.jpg')";></div>
             <pre>Car Cover              $=1399</pre>
          <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="26"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="26"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Car Cover">
            <input type="hidden" name="item_price" value="1399">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
             <div class="box-img" style="background-image: url('car/car.7.jpg')";></div>
             <pre>Car Pillows         $=1599</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="27"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="27"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Car Pillows">
            <input type="hidden" name="item_price" value="1599">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
             <div class="box-img" style="background-image: url('car/car.8.jpg')";></div>
             <pre>Car Mats         $=1999</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="28"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="28"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Car mats">
            <input type="hidden" name="item_price" value="1999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
    </div>

    <br><br><hr><br>
    <?php include("footer.php")?>
</body>
</html>