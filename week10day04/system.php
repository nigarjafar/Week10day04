<?php
include "db.php";
$db=new Database("localhost", "root","","blog");
session_start();
if($_SESSION["login"]){
//Menu
    //Adding menu item
    if(isset($_POST["addmenu"])){
        if(!empty($_POST["name"])&&!empty($_POST["href"])){
        $blog->addMenu("menu",$_POST['name'],$_POST["href"]);
            
        if(isset($_POST["new"])){  
        $page = $_POST['href'];
        $pageCreate = fopen($page, 'x+') or die("can't open file");
        fclose($pageCreate);}
        
        header("Location:admin.php");
    }
    else{
        echo "<h3>FIll IN ALL SECTIONS</h3>";
        
    }
}
    
    //Editing menu item
     if(isset($_POST["editmenu"])){
        $blog->editMenu("menu",$_POST['id'],$_POST['name'],$_POST["href"]);
        
       header("Location:admin.php");
    }
    
    //Deleting menu item
     if(isset($_POST["deletemenu"])){
        $blog->delete("menu",$_POST['id']);
        
       header("Location:admin.php");
    }

//Blog posts
    //Add
    if(isset($_POST["addpost"])){
        if(!empty($_POST["text"])&&!empty($_POST["author"])&&!empty($_FILES["img"]["name"])){
        //grap first sentence of text for heading
        $pos = strpos($_POST["text"], '.');
        $heading = substr($_POST["text"], 0, $pos);
        
        
        //upload image
        $fileSource=$_FILES["img"]["tmp_name"];
        $fileType=pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
        $targetFile="images/".date('dmYGis').".".$fileType;
        
        //date
        $date=date('Y-m-d');
        move_uploaded_file($fileSource,$targetFile);
        
        $blog->addBlogPost("post",$heading,$_POST['text'],$targetFile,$_POST["author"],$date);
        
       header("Location:admin.php");
    }
    else{
         echo "<h3>FIll IN ALL SECTIONS</h3>";
    }
}
    //Edit
     if(isset($_POST["editpost"])){
        if(!empty($_POST["text"])&&!empty($_POST["author"])&&!empty($_FILES["img"]["name"])){       
        
        //upload image
        $fileSource=$_FILES["img"]["tmp_name"];
        $fileType=pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
        $targetFile="images/".date('dmYGis').".".$fileType;
        
        move_uploaded_file($fileSource,$targetFile);
            
        $blog->editBlogPost("post",$_POST["id"],$_POST["heading"],$_POST['text'],$targetFile,$_POST["author"]);
        
        
        header("Location:admin.php");
        }
        else{
            echo "<h3>FIll IN ALL SECTIONS</h3>";
        }
    }
    //Delete
    if(isset($_POST["deletepost"])){
        $blog->delete("post",$_POST['id']);
        
       header("Location:admin.php");
    }
    
    
}
else{ header("Location:login.php");}
?>