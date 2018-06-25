<?php

function crossFoot($number)
{
    $sum = 0;
    while($number > 0) 
    {
        $temp = $number%10;
        echo "$sum + $temp =";
        $sum += $temp;
        echo "$sum";
        $number = (int)($number/10);
        //$number = floor($number/10);
        echo '<br>';
    }
    return $sum;
}

?>
