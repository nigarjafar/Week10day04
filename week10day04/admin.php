<?php 
session_start();
if($_SESSION["login"]){
include "db.php";?>
<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
        body{width:900px; margin:0 auto;}
        button{ margin:10px;}
        form,table{margin: 10px;}
        .active{background-color:#adadad;}
    </style>
    <body>
        <h1 class="text-center">Admin Panel</h1>
         
        <button id="menubutton" class="btn btn-default col-md-12"><b>Menu settings</b></button>
        
        <div id="menusetting">
            <button id="addbutton" class="btn btn-default col-md-10 col-md-offset-1">Add new </button>
                <div id="menuadd">
                      <form class="form-horizontal col-md-10 col-md-offset-1" action="system.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Add name" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="href" placeholder="Add href" >
                            </div>
                             <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="new"> Create a new page
                                </label>
                            </div>
                            <div class="form-group ">
                                <input type="submit" class="form-control btn btn-success" name="addmenu">
                            </div>
                    </form>
                </div>
            <button id="editbutton" class="btn btn-default col-md-10 col-md-offset-1">Edit/Delete</button>
                <div id="menuedit" class="col-md-10 col-md-offset-1">
                    <table class="table table-striped ">
                        <tr>
                            <th>Name</th>
                            <th>Href</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $query=$blog->select("menu","*");
                        while ($row=mysqli_fetch_assoc($query)){?>
                        <tr>
                            <td><?=$row['name']?></td>
                            <td><?=$row['href']?></td>
                            <td><a class="btn btn-success" href="menu.php?id=<?=$row['id']?>">Edit/Delete</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
        </div>
        
        <button id="blogbutton" class="btn btn-default col-md-12"><b>Blog setting</b></button>
        <div id="blogsetting">
            <button id="addblogbutton" class="btn btn-default col-md-10 col-md-offset-1">Add new </button>
                <div id="blogadd">
                      <form class="form-horizontal col-md-10 col-md-offset-1" action="system.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="text" placeholder="Add text" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="author" placeholder="Add author" >
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="img" required >
                            </div>
                            <div class="form-group ">
                                <input type="submit" class="form-control btn btn-success" name="addpost">
                            </div>
                    </form>
                </div>
            <button id="editblogbutton" class="btn btn-default col-md-10 col-md-offset-1">Edit/Delete</button>
                <div id="blogedit" class="col-md-10 col-md-offset-1">
                    <table class="table table-striped">
                        <tr>
                            <th>Heading</th>
                            <th>Text</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $query=$blog->select("post","*");
                        while ($row=mysqli_fetch_assoc($query)){?>
                        <tr>
                            <td><?=$row['heading']?></td>
                            <td><?=$row['text']?></td>
                            <td><?=$row['author']?></td>
                            <td><?=$row['img']?></td>
                            <td><a class="btn btn-success" href="blogpost.php?id=<?=$row['id']?>">Edit/Delete</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
        </div>
        
        </div>
        
        
        
        <form action="logout.php" method="post">
            <input style="margin-top:20px" type="submit" value="Logout" class="btn btn-danger col-md-4 col-md-offset-4" name="logout">
        </form>
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>


<?php
}
else{ header("Location:login.php");}
?>


