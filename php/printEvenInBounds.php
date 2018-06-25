<?php

function printEvenInBounds($begin,$end)
{  
    for($i=$begin;$i<=$end;$i+=2+) 
    {
        if($i % 2 == 0) echo $number-$i.'<br>';
    }
}

?>
