<?php

$nilai = 85;

switch (true) {
    case ($nilai >90 && $nilai <100):
        echo"Nilai A";
        break;
    case ($nilai >80 && $nilai <89):
        echo "Nilai B";
            break;
    case ($nilai >70 && $nilai <79):
        echo "Nilai C";
                break;
     case($nilai >60 && $nilai <69):
         echo "Nilai D";
                break;
    default:
         echo "Nilai E";
                break;
}