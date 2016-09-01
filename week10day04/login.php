<?php
session_start();
unset($_SESSION["error"]);

if( isset($_POST["submit"] ) ){
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(!empty($username) ){
       if(!empty($password)){
            if($username=="admin"){
               if($password=="admin"){
                    $_SESSION["login"]=true;
                    header("Location:admin.php");
                }
                else{
                    $_SESSION["error"]="The password you’ve entered is incorrect." ;
                }
            }
            else{
                $_SESSION["error"]="The username you entered doesn't belong to an account." ;
        
            }
        }
        else{
            $_SESSION["error"]="Enter your password." ;
   
        }
    }
    else{
        $_SESSION["error"]="Enter your username." ;
    }
}
else{
    unset($_SESSION["error"]);
}

?>

<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{ width:900px; margin:0 auto}
        form{ width:800px; margin:20px auto}
        p{ padding:5px; border-radius:3px;}
    </style>
    <body>
        <h1 class="text-center">Log in</h1>
            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="inputusername" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-6">
                        <input type="text" id="inputusername" class="form-control" name="username" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-6">
                        <input id="inputPassword" type="password" class="form-control" name="password" >
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <input type="submit" class="btn btn-success" name="submit" value="Daxil ol">
                    </div>
                </div>
            </form>
            <div>
                <?php if(isset($_SESSION["error"]) ) { ?>
                    <p class="bg-danger"><?=$_SESSION["error"]?></p>
                <?php } ?>
            </div>
                
    </body>
</html>
