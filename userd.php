<?php


function p($data){

    echo "<pre>";


    print_r($data);

}
   

   $x = array(
         "Car1",
         "Car2",
         "Car3",
         "Car4",
         "Car5",
         "Car6",
   );
       

   p($x);


   $y = array(
    "Car1",
    "Car2",
    "Car3",
    "Car4",
    "Car5",
    "Car6",
);

p($y);


$z = array_merge($x,$y);

print_r($z)



  
?>