<?php
// include 'Sakelibrary_action.php';


//print_r($_SESSION);




?>
<!doctype html>
<html lang="en">
  <head>
    <title>Logout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <!-- Headder -->
    <div id="login"class="big-bg">
    <header class="page-header wrapper">
  
      <h1>The Mizubasho</a>
      </h1>
      <nav>
        <ul class="main-nav">
          <li><a href="Showcase.php">Home</a></li>
          <!-- <li><a href="Account.php">My Account</a></li> -->
          <!-- <li><a href="order_history.php">Order History</a></li> -->
          <!-- <li><a href="Cart.php">Receipt</a></li> -->
        </ul>
      </nav>
    </header>
    <div class="wrapper">
      <h1 class="page-title">Login</h1>
      

    <form action="Sakelibrary_action.php" method="post">
      <div>
        <label for="email">Email:</label>
        <input type="text" name="email">
      </div>
      
      <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
      </div>
      
      <input type="submit" value="login" name="login">
    
    </form>
    </div>
    </div>

    
   

    




















      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>