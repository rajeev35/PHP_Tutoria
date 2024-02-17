<?php


function vote($age){

    if($age>=18 && $age<=65){

        return "Yes You can vote";
    }else{

        return "No, You can not vote";
    }
}
    echo  "Age 24 ". vote(24)."<br/>";
    echo  "Age 26 ". vote(26)."<br/>";
    echo  "Age 16 ". vote(16)."<br/>";
?>