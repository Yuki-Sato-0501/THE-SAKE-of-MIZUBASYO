<?php

// $sakeObj = new SakeLibrary;

// $user = $sakeObj->login_User();


// print_r($user);
// include 'classes/SakeLibrary.php';
// session_start();

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
<div class="nav">
  <h1><a href="Showcase.php">The Mizubasho</a>
  </h1>
  <nav class="menu-right menu">
    <ul>
      <li><a href="Showcase.php">Home</a></li>
      <!-- <li><a href="Account.php">My Account</a></li> -->
      <!-- <li><a href="">Contact us</a></li> -->
      <!-- <li><a href="Cart.php">Cart</a></li> -->
    </ul>
  </nav>
</div>

<body>

  <div class="container">
    <h3>YOUR ACCOUNT</h3>
  </div>
  <?php
  include 'classes/SakeLibrary.php';
  $sakeObj = new SakeLibrary;

  $user = $sakeObj->login_User();
  // print_r($user);
  foreach ($user as $row) {
    // echo $row['user_id'];

  ?>

    <table class="table table-striped w-50">
      <tr>
        <th colspan="2">Registered INFO</th>
      </tr>
      <tr>
        <td>User ID</td>
        <td><?php echo $row['user_id'] ?></td>
      </tr>
      <tr>
        <td>User Name</td>
        <td><?php echo $row['user_name'] ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $row['email'] ?></td>
      </tr>
      <tr>
        <td>Phone Number</td>
        <td><?php echo $row['phone_number'] ?></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><?php echo $row['address'] ?></td>
      </tr>

    </table>

  <?php
  }

  ?>
  <h1>Sake that you bought</h1>
  <table class="table table-striped">
    <tbody>
      <?php


      $user_cart = $sakeObj->allsake_bought();
      // print_r($user_cart);
      foreach ($user_cart as $row) {
        // echo $row['user_id'];
        $card_id = $row['cart_id']

      ?>

        <tr>
          <td><?php echo $row['product_name'] ?></td>
          <td><?php echo $row['price'] ?></td>
          <td><?php echo $row['quantity'] ?></td>
          <td><?php echo $row['total'] ?></td>
          <td><a href="Sakelibrary_action.php?action=delete?cid=$cart_id" class="href"></a><button type="submit" class="btn bnt-primary">Delete</button></td>
        </tr>

      <?php
      }
      ?>


    </tbody>
  </table>








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>