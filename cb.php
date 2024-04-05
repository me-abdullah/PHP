<?php

function new_function($para){
    echo ("hello " . $para);
}

function my_First($para2){
    echo "hi " . $para2 ;
}

function my_Second(){
    echo "bye";
}


 new_function(my_First("PHP"));
 my_Second(new_function(" Programming"));


?>