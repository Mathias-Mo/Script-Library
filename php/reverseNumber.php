<?php

$number = 5937429;
function reverseNumber($number)
{
    $result = 0;
    while($number > 0) 
    {
        $temp = $number%10;
        $result = $temp + $result * 10;
        $number = (int)($number/10);
    }
    return $result;
}

?>
