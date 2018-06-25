<?php

function buildLine($length, $start, $stop, $blank, $set)
{
    $line = '';
    for($i = 0; $i<$length;$i++)
    {
        $line .= ($i>=$start && $i <= $stop)? $set : $blank;
    }
    return $line;
}

function drawDiamond($blank, $set, $length)
{
    if($length%2==0) $length++;

    $center = floor($length/2);

    $start = $center;
    $stop  = $center;
    $step  = 0;

    while($step < $length)
    {
        echo buildLine($length,$start,$stop,$blank,$set);
        echo "<br>";
        if($step < $center)
        {
            $start--;
            $stop++;
        }
        else 
        {
            $start++;
            $stop--;
        }
        $step++;
    }

}

$blank  = "\u{2b1c}";
$set    = "\u{2b1b}";
$length = 11;

drawDiamond($blank, $set, $length);

?>
