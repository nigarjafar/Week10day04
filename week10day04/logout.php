<?php
session_start();
if(isset($_POST["logout"])){
    $_SESSION["login"]=false;
    session_destroy;
    header("Location:login.php");
}
else{
    header("Location:admin.php");
}
 
    
?>