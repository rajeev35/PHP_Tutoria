<?php


$arr = [

    "HTML" => 2500,
    "CSS" => 2400,
    "JS"=> 1800,
    "PHP" => 3400,
    "laravel" => 2300,


];

echo "<pre>";
print_r($arr);
echo "</pre>";


/*    


foreach($arr as $keys => $value)

*/


foreach($arr as $course => $fees){

    echo "The Fees of $course is $fees<br/> ";
}


?>