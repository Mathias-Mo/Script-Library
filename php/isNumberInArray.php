<?php

function isNumberInArray($arr, $number)
{
    $isIn = false;
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i] == $number) 
        {
            $isIn = true;
            break;
        }
    }
    return $isIn;
}

?>
