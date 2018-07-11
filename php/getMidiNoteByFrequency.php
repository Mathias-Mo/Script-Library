<?php

function getMidiNoteByFrequency(float $freq) : int
{
      $octave = 12; //chromatical
      $standardPitchFreq = 440; //which is A4
      $standardPitchMIDI = 69; //MIDI 69 is A4

      // Calculate
      $result = ($octave*(log($freq/$standardPitch)/log(2)))+$standardPitchMIDI;
      return $result;

}

?>
