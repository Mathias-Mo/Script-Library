<?php

function isInSquare(int $x, int $y)
{
    $originX = 30;
    $originY = 40;
    $boundX  = 120;
    $boundY  = 80;
    if(
        ($x >= $originX && $x <= $boundX) && 
        ($y >= $originY && $y <= $boundY) 
       ) 
    {
        return true;
    }
    return false;
}

if(isInSquare(40, 80))
{
    echo 'this point is in square';
}
else 
{
    echo 'this point is outside of the square';
}

?>
