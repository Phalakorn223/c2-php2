<?php
    $x = 5; //Global Variable
    //echo $x;

    function myTest(){
        global $x;
        $y = 10; //Locla Variable
        echo $y + $x;
    }

    myTest();
?>