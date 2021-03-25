<?php
include 'library_action.php';

$book_id = $_GET['id'];

$libraryObj->delete_book($book_id); //()内は上の式の左辺と同じ。




?>