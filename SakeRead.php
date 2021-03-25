<?php
include 'Sakelibrary_action.php';

$sake_list = $sakeObj->read_sake();

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
              SAKE LIST
            </p>
       </div>
       <div class="container">
          <?php foreach($sake_list as $row): 
          $sake_id = $row['sake_id'];
          $sake_img = $row['sake_img'];
              ?>
              <div class="card" >
                
                
              </div>
              <div class="card w-25 float-left mr-3">
                  <div class="card-header">
                      <img src="img/<?php echo $sake_img ?>" class="card-img-top" alt="...">
                      <a href="SakeUpdate.php?id=<?php echo $sake_id?>" class="btn btn-info">Update</a>
                      <a href="SakeDelete.php?id=<?php echo $sake_id?>" class="btn btn-danger float-right">Delete</a>
                  </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-12">
                    <p class="lead text-center">
                          <?php echo $row['sake_name'] ?>
                      </p>
                    </div>
                    </div>
                      <div class="row">
                          <div class="col-6">Details</div>
                          <div class="col-6"><?php echo $row['sake_detail'] ?></div>
                      </div>
                      <div class="row">
                          <div class="col-6">Price</div>
                          <div class="col-6"><?php echo $row['sake_price'] ?></div>
                      </div>
                      <div class="row">
                          <div class="col-6">Stock</div>
                          <div class="col-6"><?php echo $row['sake_stock'] ?></div>
                      </div>
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