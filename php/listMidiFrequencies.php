<?php

/**
 * Represents a list with midi notes from 21 up to 108 with their frequencies
 */

/*First Option*/
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

/*Second Option (please use a function for arguments)*/
$freq  = ($freq === NULL) ? 27.500 : $freq;
$start = ($start === NULL) ? 21 : $start; //which is A0 (subcontra Octave)
$end   = ($end  === NULL) ? 108 : $end; //which is C8 ()

//DO NOT CHANGE
$counter = 0;
$diff    = $end - $start;
$base    = 2; //Base of logarithm
$factor  = pow($base,1/12);

while($counter <= $diff)
{
    $arr[$start+$counter] = round($freq,3); 
    $freq *= $factor;
    $counter++;
}

return $arr;
?>
