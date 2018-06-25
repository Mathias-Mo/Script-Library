<?php
function convert2Base($number,$base)
{
    $str = '';
    while($number > 0)
    {
        $remainder = ($number % $base);
        $number    = (int)($number / $base); //Explizite Typumwandlung von float nach integer
        $str      .= $remainder;
    }
    $str = strrev($str);//STRINGS ARE IMMUTABLE!!!
    /*
    Wenn wir einen String ändern möchten, müssen wir das alte String mit dem neuen String überschreiben,
    sonst bleibt das String unverändert. Das heißt "immutability" bzw. nicht veränderbaer Typ
    */
    return $str;
}

echo convert2Base(892347,2);
echo '<br>';
echo convert2Base(1343,8);
echo '<br>';
echo convert2Base(347,8);
echo '<br>';
echo convert2Base(234234,2);
echo '<br>';
echo convert2Base(897,8);
echo '<br>';

?>
