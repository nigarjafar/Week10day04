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
			
			$query=$blog->select("post" , $id);
            $row=mysqli_fetch_assoc($query);
?>
        <form class="form-horizontal" action="system.php" enctype="multipart/form-data" method="post">
                <!--This is for posting id without session-->
                <input type="text" value="<?=$id?>" name="id" style="display:none">
                <div class="form-group">
                    <input type="text" class="form-control" name="heading"  value="<?=$row['heading']?>" placeholder="Add heading" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text"  value="<?=$row['paragraph']?>" placeholder="Add text" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="author"  value="<?=$row['author']?>" placeholder="Add author" >
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="img"  >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="editpost" value="Update">
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-danger" name="deletepost" value="Delete">
                </div>
        </form>
            
   
        <a href="admin.php" class="btn btn-default">Back</a>

        
 </body>
</html>
<?php
}
else{ header("Location:login.php");}
?>
