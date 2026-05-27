<?php
    $randomnum = rand(-100,100);
    if ($randomnum > 0) {
        $descriptionText = "Positive";
    }
    else if ($randomnum < 0) {
        $descriptionText = "Negative";
    }
    else {
        $descriptionText = "Zero";
    }

    echo "The random value of ".$randomnum." is ".$descriptionText.".";