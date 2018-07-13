function getOctaveByFrequency(float $freq)
{
        $middleC = 261.626; //which is C4
        $res     = (log($freq) - log($middleC)) / log (2) + 4.0;
        $res     = round($res,3);
        $res     = floor($res);
        return $res; //integer
}
