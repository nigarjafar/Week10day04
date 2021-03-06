<?php
class Database{
    public $host;
    public $username;
    public $password;
    public $db_name;
    public $connect;
    
    public function __construct($host,$username,$password,$db_name){
        $this->host=$host;
        $this->username=$username;
        $this->password=$password;
        $this->db_name=$db_name;
        
        $this->connect=mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
    }
    
    //Function names are in Alphabetical Order
    
    public function addBlogPost($tablename, $name, $text,$img, $author,$date ){
        
        $sql ="INSERT INTO $tablename (heading, paragraph , img, author, date)  VALUES ('$name', '$text' , '$img','$author','$date')";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
    public function addMenu($tablename, $name, $href ){
        
        $sql ="INSERT INTO $tablename (name, href)  VALUES ('$name', '$href')";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
     public function Click($tablename,$id, $click ){
        
        $sql ="UPDATE $tablename SET click='$click' WHERE id=$id";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
     public function delete($tablename,$id){
        
        $sql ="DELETE FROM $tablename WHERE id = $id";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
     public function editBlogPost($tablename,$id,$heading, $text, $img,$author ){
        
        $sql ="UPDATE $tablename SET heading='$heading', paragraph='$text', img='$img', author='$author' WHERE id=$id";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    } 
    
    public function editMenu($tablename,$id, $name, $href ){
        
        $sql ="UPDATE $tablename SET name='$name', href='$href' WHERE id=$id";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    } 
    
   
     public function orderInReverse($tablename, $col, $limit){
        $sql ="select * from $tablename order by $col desc limit $limit";
        
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
    
    public function Search($tablename,$col1,$col2,$col3,$word){
        $sql ="SELECT * FROM $tablename WHERE $col1 LIKE '%".$word."%' OR $col2 LIKE '%".$word."%' OR $col1 LIKE '%".$word."%'";
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
     public function select($tablename, $id){
        if($id=="*"){
            $sql ="SELECT * FROM $tablename";
        }
        else{
            $sql ="SELECT * FROM $tablename WHERE id=$id";
        }
        
        $query=mysqli_query($this->connect, $sql);
        return $query;
    }
    
    
}

$blog=new Database("localhost","root","","blog");


