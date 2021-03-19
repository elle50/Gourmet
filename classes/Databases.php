<?php

class Databases {
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'gourmet';
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
        
        if($this->conn->connect_error){
            echo "ERROR: connecting to databese failed";
        }else{
            return $this->conn;
        }
    
    }
}

?>