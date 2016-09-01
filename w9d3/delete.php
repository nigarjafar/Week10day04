<?php  
            include "db.php";
            $id=$_GET["id"];
        
            $sql="DELETE FROM student WHERE id=$id";
            $query=mysqli_query($db_con, $sql);  
            header("Location:index.php");
        
?>