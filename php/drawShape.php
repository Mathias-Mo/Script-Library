<?php

function buildLine($startSign, $endSign, $lineLength, $switchIndex)
{
    $line = '';
    for($i = 0; $i<$lineLength;$i++)
    {
        $line .= $i < $switchIndex ? $startSign : $endSign;
    }
    return $line;
}

function drawShape($origin, $blankSign, $setSign, $squareSize)
{

    $startSign = '';
    $endSign   = '';
    $direction = 0;

    switch($origin)
    {
        case 'top-left':
            $startSign   = $setSign;
            $endSign     = $blankSign;
            $switchIndex = $squareSize;
            $direction   = -1;
            break;

        case 'top-right':
            $startSign   = $blankSign;
            $endSign     = $setSign;
            $switchIndex = 0;
            $direction   = 1;
            break;

        case 'bottom-left':
            $startSign   = $setSign;
            $endSign     = $blankSign;
            $switchIndex = 1;
            $direction   = 1;
            break;

        case 'bottom-right':
            $startSign   = $blankSign;
            $endSign     = $setSign;
            $switchIndex = $squareSize - 1;
            $direction   = -1;
            break;
    }

    $step = 0;
    while($step < $squareSize)
    {
        echo buildLine($startSign,$endSign,$squareSize,$switchIndex);
        $switchIndex += $direction;
        echo '<br>';
        $step++;
    }
}

$blankSign  = "\u{2b1c}";
$setSign    = "\u{2b1b}";
$squareSize = 11;
$origin     = "top-left";

drawShape($origin, $blankSign, $setSign, $squareSize);

?>
