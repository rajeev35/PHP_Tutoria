<?php

#greet();

// function greet(){
//     echo "Hello!<br/>";

//     greet();


    
// }


function countNumber($start){

    

    if($start<=10){

        echo "$start<br/>";

    

    $start++;

    countNumber($start);
    }else{
        return;
    }

    

}
countNumber(1);

?>