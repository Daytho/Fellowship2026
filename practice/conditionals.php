<?php
    $num1 = 5;
    $num2 = 5; 


    if ($num1 < $num2) {
        $comparisonText = "less than";
    }else if ($num1 > $num2){
        $comparisonText = "greater than";
    }else{
        $comparisonText = "equal to";
    }

    echo "The number ".$num1." is ".$comparisonText." the number ".$num2;