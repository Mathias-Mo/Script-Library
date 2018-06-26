<?php

$number = 5937429;

function reverseNumber($number)
{
    $result = 0;
    while($number > 0) 
    {
        $result = ($result * 10) + $number % 10;
        $number = (int)($number/10);
    }
    return $result;
}

echo reverseNumber($number);

?>
