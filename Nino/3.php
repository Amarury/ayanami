<?php

$bulan = 5;

switch (true) {
    case($bulan <3):
        echo"Musim Dingin";
        break;
    case($bulan <6):
        echo "Musim semi";
        break;
    case($bulan < 9):
        echo "Panas";
        break;
    case($bulan < 12):
        echo "Musim gugur";
        break;
    default:
    echo"Tidak ada musim";
    break;
}