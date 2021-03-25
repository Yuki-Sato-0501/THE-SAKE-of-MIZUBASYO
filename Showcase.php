<?php 
// include 'Sakelibrary_action.php';
include 'classes/Sakelibrary.php';
$sakeObj = new SakeLibrary;
$sake_list = $sakeObj->read_sake();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Headder -->
    <p><?php echo "Welcome to " . $_SESSION['user_name']?></p>

    <div class="nav">
      <h1><a href="Showcase.php">The Mizubasho</a>
      </h1>
      <nav class="menu-right menu">
        <ul>
          <li><a href="Showcase.php">Home</a></li>
          <li><a href="Account.php">My Account</a></li>
          <!-- <li><a href="">Contact us</a></li> -->
          <li><a href="Cart.php">Cart</a></li>
        </ul>
      </nav>
    </div>

    <!-- Banner Area -->
    <div class="banner">
        <div class="banner-text">
          <h2>THE BEST SAKE<span> FOR YOU</span></h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vero?</p>
          <a href="#">LOG IN</a> -->
        </div>
    </div>

    <!-- Ads Area -->
    <!-- <div class="ads">
      <div class="ads-box ads-item1">
        <div class="ads-text">
          <h3>The Village of Mizubasho </h3>
          <a href="#">Read More</a>
        </div>
      </div>
      <div class="ads-box ads-item2">
        <div class="ads-text">
          <h3>New Products</h3>
          <a href="#">Read More</a>
        </div>
      </div>
    </div> -->

  <!-- Products Area -->
  <!-- <div class="products">
    <div class="section-header">
      <span>What Happens Here</span>
      <h2>Mizubasyo Products</h2>
      <hr>
    </div>
    <div class="products-gallery">
      <div class="product1">
      <a href="ProductsDetail.php">
        <img src="portfolio_img/premium.png" alt="product1">
        <h3>MIZUBASYO PREMIUM-純米大吟醸PREMIUM-</h3>
      </a>
      </div>
    </div>
  </div> -->

      <!-- <div class="products"> -->
        <?php  foreach($sake_list as $sake):
          $id = $sake['sake_id'];
          ?>
         
          <div class="card w-50 mx-aut mb-5">
            <div class="card-header">
              <img src="img/<?php echo $sake['sake_img'] ?>" alt="" class="card-img-top">
            </div>

            <div class="card-body">
              <p class="text-center lead">
              <a href="ProductsDetail.php?id=<?php echo $sake['sake_id'] ?>"> <?php echo $sake['sake_name'] ?></a>
                <br>
                ¥<?php echo $sake['sake_price'] ?>
              </p>
            </div>
            <form action="Sakelibrary_action.php" method="post">
                <input type="hidden" name="sake_name" value="<?php echo $sake['sake_name'] ?>">
                <input type="hidden" name="sake_id" value="<?php echo $id?>">
                <input type="hidden" name="sake_price" value=" <?php echo $sake['sake_price'] ?>">
                Qantity:<input type="number" name="quantity">
           
            <div class="card-footer">
              <!-- <a href="ProductsDetail.php?id=<?php echo $sake['sake_id'] ?>">Check more Details here</a> -->
              <button type="submit" name="addToCart" class="btn-sm btn-blue">Add to Cart</button>
        </form>
            </div>
          </div>
        <?php endforeach ?>
      
      <!-- </div> -->
      <?php
          $name = isset($_POST['sake_name'])? htmlspecialchars($_POST['sake_name'],ENT_QUOTES, 'utf-8') : '';
          $price = isset($_POST['sake_price'])? htmlspecialchars($_POST['sake_name'],ENT_QUOTES, 'utf-8') : '';
          $count = isset($_POST['sake_quantity'])? htmlspecialchars($_POST['sake_name'],ENT_QUOTES, 'utf-8') : '';

          session_start();

          if(isset($_SESSION['products'])){
              $products = $_SESSION['products'];
              foreach($products as $key => $product){
                  if($key == $name){
                    $count = (int)$count + (int)$product['sake_quantity'];
                  }
              }
          }






          if($name!=''&&$count!=''&&$price!=''){
              $_SESSION['products']['sake_name']=[
                'sake_quantity' => $count,
                'sake_price' => $price
              ];
          }
          $products = isset($_SESSION['products'])? $_SESSION['products']:[];

          // if(isset($products)){
          //     foreach($products as $key => $products){
          //         echo $key; //products name
          //         echo "<br>";
          //         echo $products['count']; // How many products
          //         echo "<br>";
          //         echo $products['price']; //How much products
          //         echo "<br>";
          //     }
          // }
      ?>




















      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>