<?php
class Database{
    public $host;
    public $username;
    public $password;
    public $db_name;
    public $connect;
    public $tablename;
    public $column;
    
    public function __construct($host,$username,$password,$db_name){
        $this->host=$host;
        $this->username=$username;
        $this->password=$password;
        $this->db_name=$db_name;
        
        $this->connect=mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
    }
    
    
     public function addNews($tablename, $name, $text , $date){
        $this->tablename=$tablename;
        
        $sql ="INSERT INTO $this->tablename (name, text, newsdate)  VALUES ('$name', '$text', '$date' )";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    public function Search($tablename,$date){
        $this->tablename=$tablename;
        
        $sql ="INSERT INTO $this->tablename (name, text, newsdate)  VALUES ('$name', '$text', '$date' )";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
    
}



