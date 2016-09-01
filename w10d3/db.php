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
    
    public function select($tablename){
        $this->tablename=$tablename;
        
        $sql ="SELECT * FROM $this->tablename";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
    public function delete($tablename, $columnname ,$value){
        $this->tablename=$tablename;
        
        $sql ="DELETE FROM $tablename WHERE $columnname='$value'";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
     public function update($tablename, $columnname,$value , $wcolumnname , $wvalue){
        $this->tablename=$tablename;
        
        $sql ="UPDATE $tablename SET $columnname='$value' WHERE $wcolumnname='$wvalue'";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
    
}

$db=new Database("localhost","root","","startuply");

