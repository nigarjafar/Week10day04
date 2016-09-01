<?php
include "db.php";
/*$sql="INSERT INTO student (name,surname,phone) VALUES ('Polad','Alqayev','298293923')";
$query=mysqli_query($db_con, $sql);*/
/*if($query){
    header("Location:index.php");
}*/
/*else{
    echo "yazilmadi";
}*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    
    <body>
        <form method="post" action="">
            <input type="text" name="ad" placeholder="Ad">
            <input type="text" name="soyad" placeholder="soyad">
            <input type="number" name="tel" placeholder="telefon">
            <input type="submit" name="submit">
        </form>
        
        <?php
            if(isset($_POST["submit"])){
                
                $ad=$_POST["ad"];
                $soyad=$_POST["soyad"];
                $tel=$_POST["tel"];
                
                $sql="INSERT INTO student (name,surname,phone) VALUES ('$ad','$soyad','$tel')";
                $query=mysqli_query($db_con, $sql);
                
                if($query){
                    header("Location:index.php");
                }
                else{
                    echo "yazilmadi";
                }
            }
        
        ?>
    </body>
</html>
