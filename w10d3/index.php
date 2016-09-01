<?php
    include "db.php";
    
    $db=new Database("localhost","root","","startuply");
    $query=$db->select("team");
    
    while($row=mysqli_fetch_assoc($query)){
        echo $row["name"]."<br>";
    }

    $query=$db->delete("subscribe", "id" , "5");
    $query=$db->update("subscribe","name","Nigar","id","2");
?>