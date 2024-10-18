<?php

$nilai1 = 20;
$nilai2 = 15;
$nilai3 = 12;

if($nilai1>$nilai2 and $nilai1>$nilai3) {
    echo "Angka terbesar $nilai1";
}elseif($nilai2>$nilai1 and $nilai2>$nilai3) {
    echo "Angka terbesar $nilai2";
}else {
    echo "angka terbesar $nilai3";
}