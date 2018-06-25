<?php

function getMinMax($arr)
{
    $min = array_shift($arr);
    foreach($arr as $value)
    {
        if($value < $min) 
        {
            $min = $value;
        }
    }
    return $min;
}

?>
