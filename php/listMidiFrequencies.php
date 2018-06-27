<?php

$freq = 27.500; //A0 = 27.500 Hz
$factor = pow(2,1/12); // pow calculates till 13 counts after comma (1.0594630943592953)
$freq = $freq * $factor;
$start = 21;
$end   = 108;
for($l=$start;$l<=$end;$l++)
{
    echo "Midi <b>$l</b>: $freq";
    if($l>1)
        $freq *= $factor;
    echo '<br>';
}

?>
