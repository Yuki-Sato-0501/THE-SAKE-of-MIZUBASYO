<?php
include 'classes/SakeLibrary.php';
$sakeObj = new SakeLibrary;


if(isset($_POST['register_sake'])){
    $sake_name = $_POST['sk_name'];
    $sake_price = $_POST['sk_price'];
    $sake_stock = $_POST['sk_stock'];
    $sake_detail = $_POST['sk_detail'];
    $sake_img = $_FILES['sk_img']['name'];
    

    $sakeObj->add_sake($sake_name,$sake_price,$sake_stock,$sake_detail,$sake_img);

}

else if(isset($_POST['update_sake'])){
    // $sake_name = $_POST['sk_name'];
    $sake_price = $_POST['sk_price'];
    $sake_stock = $_POST['sk_stock'];
    $sake_detail = $_POST['sk_detail'];
    // $sake_img = $_FILES['sk_img']['name'];
    $sake_id = $_POST['sake_id'];


    $sakeObj->update_sake($sake_name,$sake_price,$sake_stock,$sake_detail,$sake_img,$sake_id);

}

else if(isset($_POST['delete_sake'])){
    // $sake_name = $_POST['sk_name'];
    $sake_price = $_POST['sk_price'];
    $sake_stock = $_POST['sk_stock'];
    $sake_detail = $_POST['sk_detail'];
    // $sake_img = $_FILES['sk_img']['name'];
    $sake_id = $_POST['sake_id'];


    $sakeObj->update_sake($sake_name,$sake_price,$sake_stock,$sake_detail,$sake_img,$sake_id);

}

else if(isset($_POST['addToCart'])){
    $sake_name = $_POST['sake_name'];
    $sake_price = (int)$_POST['sake_price'];
    $sake_quantity =(int) $_POST['quantity'];
    $sake_id = $_POST['sake_id'];
    // $user_id = $_SESSION['user_id'];
    
    $sakeObj->addToCart($sake_name,$sake_price,$sake_quantity,$sake_id);

}

else if(isset($_POST['register'])){
    // echo "register set";
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
  
    $sakeObj->register($user_name,$email,$password,$phone_number,$address);
  // } else {
  //   // echo "not set";
  }
  
else if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    if (isset($_SESSION['ID'])) {
      header('Location:Showcase.php');
      # code...
    }else{
      $sakeObj ->login($email,$password);
    }
  
    
  
  }


else if(isset($_POST['finalizeorder'])){
    $sake_name = $_POST['sake_name'];
    $sake_price = (int)$_POST['sake_price'];
    $sake_quantity =(int) $_POST['sake_quantity'];
    $total = $_POST['total'];
    $id = $_POST['user_id'];
    
    $sakeObj->finalizeorder($sake_name,$sake_price,$sake_quantity,$total,$id);
}

else if ($_GET['action'] == "remove"){
    unset($_SESSION['sake_name']);
    unset($_SESSION['sake_price']);
    unset($_SESSION['sake_quantity']);
    unset($_SESSION['sake_id']);
    unset($_SESSION['total']);

    header('Location:Showcase.php');


}

else if ($_GET['action'] == "delete"){
   $cart_id = $_GET['cid'];

//    create a function to remove the cart_id from table


}



