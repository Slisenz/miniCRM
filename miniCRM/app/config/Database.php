<?php
//app/config/Database.php

class Database{
    private static $instance = null;
    
    private $conn;
    
    private $host ='localhost' ;
    
    private $user ='root';
    
    private $pass = '' ;
    
    private $nameDB = 'crm_for_telegram' ;
    
    private function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->nameDB);
         if($this->conn->connect_error){
             die("конект сдох". $this->conn->connect_error);
         }
          
    }
    
    
    // return object class "Database"
    
    public static function getInstance(){
    {
        if(!self::$instance){
            self::$instance = new Database();
        }
        return self::$instance;
    }
    }
    
    //return  method connect to DB
    public function getConnection(){
    {
        return $this->conn;
    }
    }
}

