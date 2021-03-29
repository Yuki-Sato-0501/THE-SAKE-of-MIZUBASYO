<?php
include 'SakeDatabase.php';

class SakeLibrary extends Database{

    public function add_sake($name,$price,$stock,$detail,$img){
        $target_dir='img/';
        $target_file=$target_dir.basename($img);

        $escape_details = $this->conn->real_escape_string($detail);

      $sql = "INSERT INTO products(sake_name,sake_price, sake_stock,sake_detail,sake_img) VALUES ('$name','$price','$stock','$escape_details','$img')";

      $result = $this->conn->query($sql);

      if($result == TRUE){
          echo "sake sdded succeddfuly";
          move_uploaded_file($_FILES['sk_img']['tmp_name'],$target_file);
      }else{
          die('ERROR: '.$this->conn->error);
      }
    }

    public function read_sake(){
        $sql ="SELECT * FROM products";
        $result =$this->conn->query($sql);

        if($result->num_rows > 0){
            $container = array();
            while($row = $result->fetch_assoc()){
                $container[] = $row;
            }

            return $container;

        }else{
            return FALSE;
        }
    }
    

    public function delete_sake($id){
        $sql ="DELETE FROM products WHERE sake_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:SakeRead.php');
        }else{
            die("ERROR: ". $this->conn->error);
        }
    }

    public function get_one_sake($id)
    {
        $sql ="SELECT * FROM products WHERE sake_id='$id'";
        $result = $this->conn->query($sql);

        if($result == FALSE){
            die('ERROR: '. $this->conn->error);
        }else{
            return
            $result->fetch_assoc();
        }

    }

    public function update_sake($name,$price,$stock,$detail,$img,$id){
        $target_dir='img/';
        $target_file=$target_dir.basename($img);
        $escape_details = $this->conn->real_escape_string($detail);
        $sql = "UPDATE products SET sake_name = '$name',sake_price ='$price', sake_stock ='$stock', sake_detail ='$escape_details', sake_img ='$img' WHERE sake_id = '$id'";

        $result = $this->conn->query($sql);

        if($result == TRUE){
            move_uploaded_file($_FILES['sk_img']['tmp_name'],$target_file);
            header('location:SakeRead.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }
    public function addToCart($sake_name, $sake_price, $sake_quantity,$total){
    
        $_SESSION['sake_name'] = $sake_name;
        $_SESSION['sake_price'] = $sake_price;
        $_SESSION['sake_quantity'] = $sake_quantity;
        $_SESSION['total'] = $sake_quantity*$sake_price;

        // $_SESSION['cart'] = array();
        // $_SESSION['cart'][$sake_id]=$id;

        // $_SESSION['cart']['sake_id']['sake_name']=$sake_name;
        // $_SESSION['cart']['sake_id']['sake_price']=$sake_price;
        // $_SESSION['cart']['sake_id']['sake_quantity']=$sake_quantity;
        // $_SESSION['cart']['sake_id']['total']=$sake_quantity*$sake_price;

        // $_SESSION['cart'][$sake_id]['sake_id']=$sake_id;
        // $_SESSION['cart'][$sake_id]['sake_name']=$sake_name;
        // $_SESSION['cart'][$sake_id]['sake_price']=$sake_price;
        // $_SESSION['cart'][$sake_id]['sake_quantity']=$sake_quantity;



        header('location:Cart.php');

        

    }

    // public function login($id,$name,$email,$password,$phone,$address){}

    public function register($name,$email,$password,$phone,$address){
        $sql = "INSERT INTO users(user_name,email, password,phone_number,address) VALUES ('$name','$email','$password','$phone','$address')";
    
        $result = $this->conn->query($sql);
    
        if($result ==TRUE){
            $recent_id = $this->conn->insert_id;
            $sql2 = "SELECT * FROM users WHERE user_id = '$recent_id'";
            $result2 = $this->conn->query($sql2);
            if($result2->num_rows == 1){
                $row = $result2->fetch_assoc();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                header('location:RegisterDone.php');

            }else{
                echo "error in sql 2";
            }

          // echo "result true";
        
        }else{
          die('ERROR: '.$this->conn->error);
        }
      }

    
      public function login($email,$password){
        $sql = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
        $result = $this->conn->query($sql);
    
        //echo var_dump($result);
        if($result->num_rows==1){
          $row = $result->fetch_assoc();
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['user_name'] = $row['user_name'];
          header('location:Showcase.php');
        }else{
          echo "NOT FOUND USER";
          // '.$this->conn->error);
        }
    
      }

      public function finalizeorder($sake_name, $sake_price, $sake_quantity,$total,$id){

        $_POST['sake_name'] = $sake_name;
        $_POST['sake_price'] = $sake_price;
        $_POST['sake_quantity'] = $sake_quantity;
        $_POST['total'] = $sake_quantity*$sake_price;
        

        $sql = "INSERT INTO user_cart(product_name,price, quantity,total,user_id) VALUES ('$sake_name','$sake_price','$sake_quantity','$total','$id')";

        $result = $this->conn->query($sql);
    
        if($result ==TRUE){
           
                
          header('location:Receipt.php');
        }else{
          die('ERROR: '.$this->conn->error);
        }

        
    }

    public function login_User(){
        // will read ONE RECORD ONLY
        $user_id = $_SESSION['user_id'];
        
        // this sql statement will only read 1 record
        $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $container = array();
            while($row = $result->fetch_assoc()){
                
                $container[] = $row;

            }
            return $container;
        }else{
            return FALSE;
        }
        
    }
    
    public function allsake_bought(){

        // get the user_id from session
        $user_id = $_SESSION['user_id'];
        // modufy uour sql statement to query the sake bought by the user_id/... WHERE
        $sql = "SELECT * FROM user_cart WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            $container = array();
            while($row = $result->fetch_assoc()){
                $container[] = $row;

            }
            return $container;
        }else{
            return FALSE;
        }
        
    }

    public function delete_user_order($cart_id){
        
       
        $sql ="DELETE FROM user_cart WHERE cart_id = '$cart_id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
           header('location:order_history.php');
        }else{
            die("ERROR: ". $this->conn->error);
        }

    }
    
    

}





?>