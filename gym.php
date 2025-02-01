<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include("header.php");?>
   <div class="gym-hero">
        <img src="gym/gym-hero.jpg"alt="gym photo">
    <!-- </div>
    <div class="gym-box">
        <img src="gym.1.jpg"alt="">
        <img src="gym.2.jpg"alt="">
        <img src="gym.3.jpg"alt="">
        <img src="gym.4.jpg"alt="">
    </div>
    -->
    <div class="shop-section">
    
        <div class="box1 box">
          <div class="box-content1">
            <h2></h2>
           <div class="box-img" style="background-image: url('gym/gym.1.jpg')";></div>
           <pre>Spin Bike       $=12999</pre>
           <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="13"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="13"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Spin Bike">
            <input type="hidden" name="item_price" value="12999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
          </div>
        </div>
        <div class="box1 box">
            <div class="box-content1">
              <h2></h2>
             <div class="box-img" style="background-image: url('gym/gym.2.jpg')";></div>
             <pre>Tread mill       $=25999</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="14"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="14"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Tread mill">
            <input type="hidden" name="item_price" value="25999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
              <h2></h2>
             <div class="box-img" style="background-image: url('gym/gym.3.jpg')";></div>
             <pre>  GYM Set          $=40999</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="15"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="15"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="GYM Set">
            <input type="hidden" name="item_price" value="40999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
              <h2> </h2>
             <div class="box-img" style="background-image: url('gym/gym.4.jpg')";></div>
             <pre> Leg Machine      $=15099</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="16"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="16"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Leg Machine">
            <input type="hidden" name="item_price" value="15099">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
    </div>
    <div class="shop-section">
    
        <div class="box1 box">
          <div class="box-content1">
           <div class="box-img" style="background-image: url('gym/gym.5.jpg')";></div>
           <pre>Dumbbells       $=1495</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="17"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="17"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Dumbbells">
            <input type="hidden" name="item_price" value="1495">
            <button class="buy" type="submit">Buy Now</button>
        </form>
          </div>
        </div>
        <div class="box1 box">
            <div class="box-content1">
             <div class="box-img" style="background-image: url('gym/gym.6.jpg')";></div>
             <pre>Dumbbells          $=999</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="18"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="18"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Dumbbells">
            <input type="hidden" name="item_price" value="999">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
             <div class="box-img" style="background-image: url('gym/gym.7.jpg')";></div>
             <pre>Hand Grips     $=599</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="19"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="19"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Hand Grips">
            <input type="hidden" name="item_price" value="599">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
          <div class="box1 box">
            <div class="box-content1">
             <div class="box-img" style="background-image: url('gym/gym.8.jpg')";></div>
             <pre>Power Twister Bar    $=449</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="20"> <!-- Replace '1' with the actual item ID -->
            <button class="addtocart" type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="20"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Power Twister Bar">
            <input type="hidden" name="item_price" value="449">
            <button class="buy" type="submit">Buy Now</button>
        </form>
            </div>
          </div>
    </div>
    <br><br><hr><br>
    <?php include("footer.php")?>
</body>
</html>