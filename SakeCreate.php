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
            ADD SAKE
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
                  <form action="Sakelibrary_action.php"method="post" enctype="multipart/form-data">
                    <input type="text" name="sk_name" placeholder="ENTER SAKE NAME" id="" class="form-control mt-3"> 
                    <input type="text" name="sk_price" placeholder="ENTER SAKE PRICE"  id="" class="form-control mt-3"> 
                    <input type="text" name="sk_stock" placeholder="ENTER SAKE STOCK"  id="" class="form-control mt-3"> 
                    <textarea row="3" col="80" name="sk_detail" id="" class="form-control mt-3"> 
                    </textarea>
                    <input type="file" name="sk_img" placeholder="ENTER SAKE IMG"  id="" class="form-control mt-3"> 
                   
                    <button type="submit" name="register_sake" class="btn btn-outline-primary mt-3">REGISTER</button>
                  </form>
              </div>
              <div class="card-footer">
                  <a href="SaleRead.php" class="card-link btn btn-outline-info">CHECK SAKE LIST</a>
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