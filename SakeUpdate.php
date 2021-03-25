<?php
include 'SakeLibrary_action.php';
$sake_id = $_GET['id'];

$one_sake = $sakeObj->get_one_sake($sake_id);









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
        <div class="jumbotron">
            <p class="lead text-center">
              UPDATE SAKE
            </p>
        </div>
      </div>

      <div class="container">
          <div class="card w-50 mx-auto">
              <div class="card-header">
                  <p class="text-center lead">
                    SAKE INFO
                  </p>
              </div>
              <div class="card-body">
                  <form action="Sakelibrary_action.php?id=<?php echo $sake_id ?>"method="post"enctype="multipart/form-data">
                    <input type="hidden"name="sake_id" value="<?php echo $sake_id ?>">
                    <input type="text" name="sk_name" placeholder="<?php echo $one_sake['sake_name'] ?>" id="" class="form-control mt-3"> 
                    <input type="text" name="sk_price" placeholder="<?php echo $one_sake['sake_price'] ?>"  id="" class="form-control mt-3"> 
                    <input type="text" name="sk_stock" placeholder="<?php echo $one_sake['sake_stock'] ?>"  id="" class="form-control mt-3"> 
                    <textarea row="3" col="10" name="sk_detail" placeholder="<?php echo $one_sake['sake_detail'] ?>"  id="" class="form-control mt-3"> </textarea>
                    <input type="file" name="sk_img" placeholder="<?php echo $one_sake['sake_img'] ?>"  id="" class="form-control mt-3"> 
                    
                    <button type="submit" name="update_sake" class="btn btn-outline-primary mt-3">SAVE</button>
                  </form>
              </div>
              <div class="card-footer">
                  <a href="Read.php" class="card-link btn btn-outline-info">CHECK SAKE LIST</a>

              </div>

          </div>

      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
