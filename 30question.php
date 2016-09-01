<?php
 $word = 'Code Academy 2016';

function length($string){
    $k=0;
    
    while($string[$k]!=null){ $k++;}
    echo $k;
}

length($word);
?>