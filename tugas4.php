<?php
$namaKaryawan = "Wahyuti";
$gajiPokok = 300000;
$tunjanganJabatan = 0.05 * $gajiPokok;  // Tunjangan jabatan (5% dari gaji pokok)
$jamKerja = 9;
$tarifLemburPerJam = 50000;

// Menghitung honor lembur
$honorLembur = 0;
if ($jamKerja > 8) {
    $jamLembur = $jamKerja - 8;
    $honorLembur = $jamLembur * $tarifLemburPerJam;
}

// Menghitung total gaji
$totalGaji = $gajiPokok + $tunjanganJabatan + $honorLembur;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Program Hitung Gaji Karyawan</title>
</head>
<body>
    <h2>PROGRAM HITUNG GAJI KARYAWAN</h2>
    <h3>Karyawan yang bernama....... <?php echo $namaKaryawan; ?></h3>
    <h3>Honor yang diterima:</h3>
    <ul>
        <li>Gaji pokok Rp ... <?php echo number_format($gajiPokok, 0, ',', '.'); ?></li>
        <li>Tunjangan Jabatan Rp ... <?php echo number_format($tunjanganJabatan, 0, ',', '.'); ?></li>
        <li>Jam kerja ... <?php echo $jamKerja; ?> jam</li>
        <li>Honor Lembur Rp ..... <?php echo number_format($honorLembur, 0, ',', '.'); ?></li>
    </ul>
    <h2>_________________________________________+</h2>
    <h3>Total gaji (Gaji pokok + Tunjangan + Lembur ) Rp ... <?php echo number_format($totalGaji, 0, ',', '.'); ?></h3>
</body>
</html>
