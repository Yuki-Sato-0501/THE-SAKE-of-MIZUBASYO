<?php
include 'library_action.php';

$book_list = $libraryObj->read_books();

// echo "<pre>";
// print_r($book_list);
// echo "</pre>";


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

    <div class="container-fluid">
       <div class="jumbtron bg-info text-light">
            <p class="lead text-center">
              BOOK LIST
            </p>
       </div>
       <div class="container">
          <?php foreach($book_list as $row): 
          $book_id = $row['book_id'];
              ?>
              <div class="card w-25 float-left mr-3">
                  <div class="card-header">
                      <p class="lead text-center">
                          <?php echo $row['book_name'] ?>
                      </p>

                      <a href="Update.php?id=<?php echo $book_id?>" class="btn btn-info">Update</a>
                      <a href="Delete.php?id=<?php echo $book_id?>" class="btn btn-danger float-right">Delete</a>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-6">Genre</div>
                          <div class="col-6"><?php echo $row['book_genre'] ?></div>
                      </div>
                      <div class="row">
                          <div class="col-6">Author</div>
                          <div class="col-6"><?php echo $row['book_author'] ?></div>
                      </div>
                  </div>
                  <div class="card-footer">
                      <div class="row">
                          <div class="col-6">Date Added:</div>
                          <div class="col-6"><?php echo $row['date_added'] ?></div>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
       </div>
    </div>
    

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>