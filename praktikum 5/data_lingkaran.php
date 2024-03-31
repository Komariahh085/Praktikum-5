<?php

require_once './class_lingkaran.php';

echo "Nilai PHI : " . Lingkaran::PHI;

$lingkaran = new Lingkaran(10);
$lingkaran = new Lingkaran(7);

echo "<br>Luas object lingkaran 1 :" . $lingkaran->getluas();
echo "<br>Luas object lingkaran 2 :" . $lingkaran->getluas();

echo "<br>Keliling object lingkaran 1 :" . $lingkaran->getkeliling();
echo "<br>Keliling object lingkaran 2 :" . $lingkaran->getkeliling();
