<?php

$umur = 15;

if($umur <12) {
    echo "Anak-Anak";
}elseif($umur <17) {
    echo "Remaja";
}elseif($umur <50) {
    echo "dewasa";
}else {
    echo "Lanjut usia";
}