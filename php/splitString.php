<?php

function splitString($str, $step)
{
    $splitted = array();
    $endOffSet = strlen($str) % $step;

    for($i=0;$i<strlen($str)-$endOffSet;$i+=$step)
    {
        $group = '';
        for($j=0;$j<$step;$j++)
        {
            $group .= $str[$i+$j],
        }
        $splitted[] = $group;
    }
    return $splitted;
}

?>
