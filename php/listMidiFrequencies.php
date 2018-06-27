<?php

/**
 * Represents a list with midi notes from 21 up to 108 with their frequencies
 */

$start = 21; //do not change
$end   = 108; //do not change
$freq = 27.500; //A0 = 27.500 Hz
$factor = pow(2,1/12); // pow calculates till 13 counts after comma (1.0594630943592953)
$freq = $freq * $factor;

for($l=$start;$l<=$end;$l++)
{
    echo "Midi <b>$l</b>: $freq Hz";
    if($l>1)
        $freq *= $factor;
    echo '<br>';
}

?>
