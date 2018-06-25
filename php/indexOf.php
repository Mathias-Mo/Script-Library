<?php
function indexOf($array, $number)
{
    for($i=0;$i<count($arr);$i++) {
        if($arr[$i] == $number) 
            return $i;
    }
    return -1;
}
?>
