<?php

class Database{
    private $servername='localhost';
    private $username='root';
    private $password='root';
    private $db_name='library_pm'; //これだけ変える
    public $conn;

    public function __construct() //is to automatically runs whenever this file is executed/runこのファイルが実行・実行されるだびに自動的に実行されます。
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);

        if($this->conn ==TRUE){
            return $this->conn;
        }else{
            die('ERROR '.$this->conn->connect_error);
        }
    }
    
}

?>