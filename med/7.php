<?php

$harga = 60000;
$diskon = 0;

if($harga >50000) {
    $diskon = 20/100*$harga;
}elseif($harga >25000) {
    $diskon = 10/100*$harga;
}else {
    $diskon =20;
}
echo "Anda mendapatlan diskon sebesar $diskon";