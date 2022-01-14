<?php

    if(isset($_POST['calculate']))
        {
            $value1 = $_POST['val1'];
            $operator = $_POST['operators'];
            $value2 = $_POST['val2'];

            switch($operator)
            {
                case "add":
                    $sol = $value1 + $value2;
                    break;
                
                case "sub":
                    $sol = $value1 - $value2;
                    break;

                case "mul":
                    $sol = $value1 * $value2;
                    break;

                 case "div":
                    $sol = $value1 / $value2;
                   break;
                    
                case "mod":
                    $sol = $value1 % $value2;
                   break;
                
                default :
                echo "Input valid Number";
            }
                echo $sol;

        }


?>