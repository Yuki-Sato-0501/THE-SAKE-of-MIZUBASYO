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
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
<div id="account"class="big-bg">
    <header class="page-header wrapper">
  
      <h1>The Mizubasho</a>
      </h1>
      <nav>
        <ul class="main-nav">
          <li><a href="Showcase.php">Home</a></li>
          <li><a href="Account.php">My Account</a></li>
          <li><a href="order_history.php">Order History</a></li>
          <!-- <li><a href="Cart.php">Receipt</a></li> -->
        </ul>
      </nav>
    </header>
    <div class="wrapper">
      <h1 class="page-title">Please Check Your Order!</h1>
      </div>
    </div>
  </head>
  <br>
    <br>
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
            if(!empty($_SESSION['sake_name'])){
            ?>
            <tbody>
               <tr>
                 <td><?php echo $_SESSION['sake_name'] ?></td>
                 <td><?php echo $_SESSION['sake_price'] ?></td>
                 <td><?php echo $_SESSION['sake_quantity'] ?></td>
                 <td><?php echo $_SESSION['total'] ?></td>
                 <td><a href="Sakelibrary_action.php?action=remove" class="href"><button type="submit" class="btn btn-outline-primary">Delete</button></a></td>
               </tr>
            </tbody>
          </table>
          <div class="cart-btn">
          <!-- <a href="Showcase.php"><button type="button" class="btn btn-outline-info">Continue Shopping</button></a> -->
          <form action="Sakelibrary_action.php" method="post">
              <input type="hidden" name="sake_id" id="" value="<?php echo $_SESSION['sake_id'] ?>">
              <input type="hidden" name="sake_name" id="" value="<?php echo $_SESSION['sake_name'] ?>">
              <input type="hidden" name="sake_price" id="" value="<?php echo $_SESSION['sake_price'] ?>">
              <input type="hidden" name="sake_quantity" id="" value="<?php echo $_SESSION['sake_quantity'] ?>">
               <input type="hidden" name="total" id="" value="<?php echo $_SESSION['total'] ?>">
              <input type ="hidden" name="user_id"
                value="<?php echo $_SESSION['user_id'] ?>">


          <button type="submit" name="finalizeorder" class="btn btn-outline-danger">Proceed to Checkout</button></form>
            
            </div>
          
        </div>
        </div>

        <?php
           } else{
             echo "YOU HAVENT OREDERED ANY SAKE YET";
           }
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