<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include("header.php");?>
    <div class="slider">
        <figure>
          <div class="slide">
            <img src="ac/ac-hero.webp"alt="hero img">
          </div>
        </figure>
  </div>
    <div class="shop-section">
    
<div class="box1 box">
    <div class="box-content">
        <div class="box-img" style="background-image: url('ac/ac1.jpg');"></div>
        <pre>Voltas $=40999</pre>
        <form action="add_to_cart.php" method="POST" style="display: inline;">
            <input type="hidden" name="item_id" value="1"> <!-- Replace '1' with the actual item ID -->
            <button type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="1"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Voltas">
            <input type="hidden" name="item_price" value="40999">
            <button type="submit">Buy Now</button>
        </form>
    </div>
</div>


      <div class="box1 box">
        <div class="box-content">
          <div class="box-img" style="background-image: url('ac/ac4.jpg')";></div>
          <pre>Godrej                     $=30999</pre>
          <input type="hidden" name="item_id" value="1"> <!-- Replace '1' with the actual item ID -->
            <button type="submit">Add To Cart</button>
        </form>
        <form action="payment.php" method="POST">
            <input type="hidden" name="item_id" value="2"> <!-- Replace '1' with the actual item ID -->
            <input type="hidden" name="item_name" value="Voltas">
            <input type="hidden" name="item_price" value="40999">
            <button type="submit">Buy Now</button>
        </form>
        </div>
      </div>
      <div class="box1 box">
        <div class="box-content">
          <div class="box-img" style="background-image: url('ac/ac2.jpg')";></div>
          <pre>Hitachi                              $=35999</pre>
          <button>Add To Cart</button>
          <button>Bay Now</button>
        </div>
      </div>
      <div class="box1 box">
        <div class="box-content">
          <div class="box-img" style="background-image: url('ac/ac3.jpg')";></div>
          <pre>LG                              $=51999</pre>
          <button>Add To Cart</button>
          <button>Bay Now</button>
        </div>
      </div>
    </div>
    <div class="shop-section">
    
      <div class="box1 box">
        <div class="box-content">
          <div class="box-img" style="background-image: url('ac/ac5.jpg')";></div>
          <pre>Godrej                           $=41000</pre>
          <button>Add To Cart</button>
          <button>Bay Now</button>
        </div>
      </div>
      <div class="box1 box">
        <div class="box-content">
          <div class="box-img" style="background-image: url('ac/ac6.jpg')";></div>
          <pre>Parasonic                           $=31599</pre>
          <button>Add To Cart</button>
          <button>Bay Now</button>
        </div>
      </div>
      <div class="box1 box">
        <div class="box-content">
          <div class="box-img" style="background-image: url('ac/ac7.webp')";></div>
          <pre> Cruise                     $=25000</pre>
          <button>Add To Cart</button>
          <button>Bay Now</button>
        </div>
      </div>
      <div class="box1 box">
        <div class="box-content">
          <div class="box-img" style="background-image: url('ac/ac8.jpg')";></div>
          <pre>Blue Star                          $=28999</pre>
          <button>Add To Cart</button>
          <button>Bay Now</button>
        </div>
      </div>
    </div>
    <br><br><hr><br>
    <?php include("footer.php");?>

</body>
</html>