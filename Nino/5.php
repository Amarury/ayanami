<?php

$golongan = 2;

switch ($golongan) {
    case (1):
        echo"Rp.5.000.000";
        break;
    case (2):
        echo "Rp.4.000.000";
        break;
    case (3):
        echo "Rp.3.0000.000";
        break;
    case (4):
        echo"Rp.4.000.00";
        break;
    default:
    echo "Golongan tidak diketahui";
    break;
}