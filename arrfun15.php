<?php

     $car = array(

        0 => "Car1",
        1 => "Car8",
        2 => "Car1",

        3 => "Car1",
        4 => "Car1",
        5 => "Car1",
        6 => "Car1",
        7 => "Car1",
        8 => "Car1",



     );

     $x = 5;

     if(is_array($x)){
        echo "X is an Array";
     }else{
        echo "X is not an Array";
     }
     echo "<pre>";

    //  var_dump(is_array($car));

    //  echo "<pre>";

    //  var_export(is_array($x));

    echo array_search('Car8', $car);

    $chucked = array_chunk($car,2);

    print_r($chucked);
    

     echo "<pre>";

     print_r($car);

?>