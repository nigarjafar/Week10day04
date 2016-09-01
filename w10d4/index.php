<!DOCTYPE html>
<html>
    <head></head>
    
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <style>
        body{width:900px; margin:0 auto;}
    </style>
    <body>
         
        
        
        
        
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h3> Add News</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Add name" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" placeholder="Add text" >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit">
                </div>
        </form>
            
   


<?php
    include "db.php";

    if( isset($_POST["submit"]) ){
        
		if( !empty($_POST['name']) &&!empty($_POST['text']) ){
            $db=new Database("localhost", "root","","news");
            $date=date('Y-m-d');
            $db->addNews("thenews",$_POST['name'],$_POST['text'], $date );
			
		}
        else{ ?>
            <p class="text-danger">Please fill in all sections</p>
            <?php
			}
	   }
    else{
         
        }

?>
        
 </body>
</html>
