<?php
// include 'Sakelibrary_action.php';
// $sakeObj->get_one_sake($_SESSION['sake_id']);

//print_r($_SESSION);

session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cart SQARE, inc.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Headder -->
    <div class="nav">
      <h1><a href="Showcase.php">The Mizubasho</a>
      </h1>
      <!-- <nav class="menu-right menu">
        <ul>
          <li><a href="Showcase.php">Home</a></li>
          <li><a href="">Menu</a></li>
          <li><a href="">Contact us</a></li>
          <li><a href="Cart.php">Cart</a></li>
        </ul>
      </nav> -->
    </div>

    <main>
      <div class="wrapper laset-wrapper">
        <div class="container">
          <div class="wrapper-title">
            <h3>Receipt</h3>
          </div>
        <div class="cartlist">
          <table class="table table-bordered table-info table-hover">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
              </tr>
            </thead>

            
            
            <?php
            // $sake_ids = $_SESSION['cart'];
            // echo print_r($sake_ids);

            // foreach($sake_ids as $sake_id){
              // echo $_SESSION[$sake_id];
              //  echo $_SESSION['cart'][$sake_id]['sake_name'];
            // }
            // ?>
            <tbody>
               <tr>
                 <td><?php echo $_SESSION['sake_name'] ?></td>
                 <td><?php echo $_SESSION['sake_price'] ?></td>
                 <td><?php echo $_SESSION['sake_quantity'] ?></td>
                 <td><?php echo $_SESSION['total'] ?></td>
                 
               </tr>
            </tbody>
          </table>
          <div class="cart-btn">
          <a href="Showcase.php"><button type="button"  name=""class="btn btn-outline-info">Back to Shopping</button></a>
          </div>
          
          <h1>Thank You For Your Purchase!</h1>
        </div>
        </div>

        <?php
            
        ?>
      </div>
    </main>
   
    
    




















      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>