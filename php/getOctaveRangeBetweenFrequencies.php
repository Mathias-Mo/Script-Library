<?php

function calcOctaveRangeBetweenFrequencies(float $hfreq = NULL, float $lfreq = NULL)
{

    return log($hfreq/$lfreq) / log(2);

}

?>
