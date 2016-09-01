<?php 
include "index.php";




$a = new Database('localhost','root','','crud');

$a->connect();

$a->goster('telebe','id,surname,name');

$b = $a->getResult();

echo "<pre>";
echo "</pre>";











 ?>