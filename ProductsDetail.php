<?php
include 'Sakelibrary_action.php';
$sake_id = $_GET['id'];
$one_sake = $sakeObj->get_one_sake($sake_id);



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/productdetail.css">
    

      <!-- Bootstrap CSS -->
    
  </head>
  <body>
    <div id="detail"class="big-bg">
    <header class="page-header wrapper">
  
      <h1>The Mizubasho</a>
      </h1>
      <nav>
        <ul class="main-nav">
          <li><a href="Showcase.php">Home</a></li>
          <li><a href="Account.php">My Account</a></li>
          <li><a href="order_history.php">Order History</a></li>
          <li><a href="Cart.php">Receipt</a></li>
        </ul>
      </nav>
    </header>
    <div class="wrapper">
      <h1 class="page-title">Product Detail</h1>
      </div>
    </div>

   
   

  <br>
  <div class="detail-contents wrapper">
    <article>
    <img src="img/<?php echo $one_sake['sake_img']?>" alt="">
    </article>
    
    <aside>
    <h2><?php echo $one_sake['sake_name'] ?></h2>
    <br>
    <p><?php echo $one_sake['sake_detail'] ?></p>
    <br>
    <p>¥<?php echo $one_sake['sake_price'] ?></p>
    <br>
    <a href="Showcase.php"> Back to Shopping</a>
    <br>
    </aside>
    <!-- <a href="Cart.php"> Add to Cart</a> -->
    </div>























      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>

