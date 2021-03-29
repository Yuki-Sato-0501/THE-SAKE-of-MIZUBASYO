<?php 
include 'Sakelibrary_action.php';
$id = $_GET['cart_id'];

$sakeObj->delete_user_order($id);




?>