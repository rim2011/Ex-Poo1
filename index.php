<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 23/11/2018
 * Time: 14:13
 */
function divide($nombre1,$nombre2){
    try{
        if ($nombre2 === 0) {
            throw new Exception("We can't divide by zero");
        }
        else{
            $div=$nombre1/$nombre2;
            echo $div;
        }
    } catch (Exception $e) {
        echo $e->getMessage()."<br>";
        echo "the error code is: ".$e->getCode()."<br>";
        echo $e->getFile()."<br>";
        echo "The error was created on line: " . $e->getLine()."<br>";
        echo "The string representation of the error is: ".$e->__toString()."<br>";
    }

}


echo " 10 / 0 = ";
echo divide(10,0);