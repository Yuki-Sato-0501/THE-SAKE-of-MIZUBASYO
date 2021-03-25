<?php
include 'Database.php';

class library extends Database{

    public function add_book($name,$genre,$author,$date){ //decision making: how many parameters should I add here? （）の中はパラメーターと同じ数
    // answer: cout how many data you will add inside database
    $sql = "INSERT INTO books(book_name,book_genre,book_author,date_added)VALUES('$name','$genre','$author','$date')"; //databaseの言語
    $result = $this->conn->query($sql); //query is tlansrator to code // execution of query

    if($result == TRUE){
      echo "book added succeddfuly";
      //header('location:read.php');//means go to read.php if there is no error
    }else{
        die('ERROR: '.$this->conn->error); //die means stop all execution 「die」以下は表示されなくなる。ただし、開発中だけworkingさせる。完成したら//で消す。
    }
    }

    public function read_books(){
        $sql ="SELECT * FROM books"; //booksの部分を変更できる。
        $result =$this->conn->query($sql);

        if ($result->num_rows > 0) {
            $container = array();
            while($row = $result->fetch_assoc()){
                $container[] = $row;
            }

            return $container; //$以下を変えると、表示される結果が変えられる。

        } else {
            return FALSE;
        }
        

    }

    public function delete_book($id){
        $sql ="DELETE FROM books WHERE book_id = '$id'";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {
          header('location:Read.php');
        } else {
          die("ERROR: ".$this->conn->error);
        }
        
    }

    public function get_one_book($id){
        $sql ="SELECT * FROM books WHERE book_id='$id'";
        $result = $this->conn->query($sql);

        if($result == FALSE) {
            die('ERROR: '.$this->conn->error);
        } else {
            return $result->fetch_assoc();
        }
        
    }

    public function update_book($name,$genre,$author,$date,$id){
        //finish this
        //sql code
        $sql = "UPDATE books SET book_name = '$name',book_genre ='$genre',book_author='$author',date_added='$date' WHERE book_id = '$id'";
        // execution
        $result = $this->conn->query($sql);
        //validation
        if($result == TRUE){
            header('location:Read.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }
}







?>