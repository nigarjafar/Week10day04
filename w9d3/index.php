<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    
    <body>
        <table>               
            
                <?php
                include "db.php";
                if($db_con){
                        $sql="SELECT * FROM student";
                        $query=mysqli_query($db_con , $sql);                       ?>
                       <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>surname</th>
                            <th>phone</th>
                        </tr>
                <?php   while($row=mysqli_fetch_assoc($query) ){                  ?>
                         <tr>

                <?php       foreach($row as $key=>$value){                        ?>
                                <td><?=$value?></td>
                <?php       }                                                     ?>
                                <td>
                                    <a href="delete.php?id=<?=$row['id']?>">Delete</a>
                                </td>
                        </tr>
                 <?php   }                                                        
                }
                else{
                    echo "Error";
                }
            
                ?>
                
        </table>
    </body>
</html>
