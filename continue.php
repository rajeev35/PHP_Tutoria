<?php

$count=0;

for($i = 0; $i<10; $i++){

    if($i%2==0){
        continue;
    }

    $count++;

    echo "$i<br/>";

   
}
echo $count;


?>