<!doctype html>
<html lang="en">
  <head>
    <title>User Register</title>
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
            USER REGISTER
        </p>
      </div>
    </div>

    <div class="container">
          <div class="card w-50 mx-auto">
              <div class="card-header">
                  <p class="text-center lead">
                    USER INFO
                  </p>
              </div>
              <form action="Sakelibrary_action.php"method="post" enctype="multipart/form-data">
                  <div class="card-body">
                        <input type="text" name="user_name" placeholder="ENTER Name" id="" class="form-control mt-3"> 
                        <input type="text" name="email" placeholder="ENTER email@"  id="" class="form-control mt-3"> 
                        <input type="text" name="password" placeholder="ENTER Password"  id="" class="form-control mt-3"> 
                        <input type="text" name="phone_number" placeholder="xxx-xxx-xxx"  id="" class="form-control mt-3"> 
                        <input type="text" name="address" placeholder="ENTER Address"  id="" class="form-control mt-3"> 
                  </div>
                  <div class="card-footer">
                        <input type="submit" value="REGISTER" name="register" class="card-link btn btn-outline-info">
                      <!-- <a href="RegisterDone.php" class="card-link btn btn-outline-info">REGISTER</a> -->
                  </div>
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