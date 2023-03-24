<?php
// File name: hello.php


function greet() {
    $message = "Hello";
    $message .= " World!";
   
    return $message;
   
}


echo greet() . " Today is " . date("F j, Y");
?>