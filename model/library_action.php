<?php
include 'classes/Library.php';
$libraryObj = new Library;


if(isset($_POST['save_book'])){
  $book_name = $_POST['bk_name'];
  $book_genre = $_POST['bk_genre'];
  $book_author = $_POST['bk_author'];
  $date_added = $_POST['bk_date_added'];
  

  $libraryObj->add_book($book_name,$book_genre,$book_author,$date_added);




}

if(isset($_POST['update_book'])){
  $book_name = $_POST['bk_name'];
  $book_genre = $_POST['bk_genre'];
  $book_author = $_POST['bk_author'];
  $date_added = $_POST['bk_date_added'];
  //$book_id = $_GET['id'];
  $book_id =$_POST['book_id'];

  $libraryObj->update_book($book_name,$book_genre,$book_author,$date_added,$book_id);

//use the method/functionality


}



?>