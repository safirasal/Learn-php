<?php
// menghitung luas dan keliling lingkaran 
/*
algoritma:
1. masukkan nilai phi
2. menetapkan nilai phi
3. hitung luas -> rumus luas
4. hitung keliling -> rumus keliling
5. tampil nilai luas dan keliling
*/

// membuat variabel -> r, phi, luas, keliling
$r =10;
$phi = 3.14;
$luas = $r * $r * $phi;
$keliling = $phi * 2 * $r;
echo "Luas Lingkaran: $luas \n";
echo "Keliling Lingkaran: $keliling";
?>