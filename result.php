<?php

// print_r($_POST)



 $number1 = $_POST['num1'];
 $number2 = $_POST['num2'];
 $operator = $_POST['operator'];


   
    if (is_numeric($number1) && is_numeric($number2)) {
        switch ($operator) {
            case "add":
              echo $result = $number1 + $number2;
                break;
            case "sub":
              echo $result = $number1 - $number2;
                break;
            case "mul":
                echo $result = $number1 * $number2;
                break;
            case "div":
               echo $result = $number1 / $number2;
                break;
            case "mod":
               echo $result = $number1 % $number2;
                break;
        }
    }









?>