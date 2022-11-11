<?php
$sa = $_POST['saldo_awal'];
$bunga = $_POST['bunga'];
$bulan = $_POST['bulan'];
$saldo_akhir=$sa+($sa*$bunga)*$bulan;
echo "nasabah menabung $sa";
echo "tabungan saldo akhir selama $bulan adalah $saldo_akhir";

