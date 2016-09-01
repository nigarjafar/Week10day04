<?php 
session_start();
if($_SESSION["login"]){ ?>

<!DOCTYPE html>
<html>
    <head></head>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
        body{width:900px; margin:0 auto;}
    </style>
    <body>
        <h1 class="text-center">Admin Panel </h1>

<?php
			include "db.php";
			$id=$_GET['id'];
			
			$query=$blog->select("menu" , $id);
            $row=mysqli_fetch_assoc($query);
?>
        <form class="form-horizontal" action="system.php" method="post">
                <!--This is for posting id without session-->
                <input type="text" value="<?=$id?>" name=id style="display:none">
                <div class="form-group">
                    <input type="text" class="form-control" name="name"  value="<?=$row['name']?>" placeholder="Add name" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="href"  value="<?=$row['href']?>" placeholder="Add address" >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="editmenu" value="Update">
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-danger" name="deletemenu" value="Delete">
                </div>
        </form>
            
   


        
 </body>
</html>
<?php
}
else{ header("Location:admin.php");}
?>
