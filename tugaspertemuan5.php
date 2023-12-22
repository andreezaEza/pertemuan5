<?php
// Pemasukan
$pemasukan = 50000000;

// Hutang a
$hutang_a = 16500000;
$bunga_a = 0.05;  // 5%

// Hutang b
$hutang_b = 9500000;
$bunga_b = 0.045;  // 4.5%

// Perhitungan
$sisa_uang = $pemasukan - $hutang_a - $hutang_b;

$jumlah_bunga_a = $hutang_a * $bunga_a;
$jumlah_bunga_b = $hutang_b * $bunga_b;
$total_bunga = $jumlah_bunga_a + $jumlah_bunga_b;

$total_hutang = $hutang_a + $hutang_b;

// Menampilkan hasil
echo "Sisa Uang: " . number_format($sisa_uang, 0, ',', '.');
echo "<br />";
echo "Jumlah Total Bunga Hutang: " . number_format($total_bunga, 0, ',', '.');
echo "<br />"; 
echo "Jumlah Total Hutang: " . number_format($total_hutang, 0, ',', '.');
?>
