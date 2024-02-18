<?php

$age = 17;

switch($age){

    case($age>=18 && $age<=65):
        echo "Yes you can vote";
        break;
        case(18-$age ==1):
            echo "Please wait for one more year";
            break;

        default:
        echo "No, You can not vote";
          #code 
          break;
}

?>