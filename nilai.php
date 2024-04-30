<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Nilai</title>
</head>

<body>
    <center>
        <pre><h1><?php
        if (isset($_POST['hit'])) {
            $nm = $_POST['nama'];
            $abs = $_POST['absen'];
            $tgs = $_POST['tugas'];
            $pro = $_POST['projek'];
        }
        $absen = $abs / 14 * 20;
        $tugas = $tgs * 25 / 100;
        $projek = $pro * 55 / 100;
        $total = $absen + $tugas + $projek;
        if ($total >= 80) {
            $grade = 'A';
        } elseif ($total >= 70) {
            $grade = 'B';
        } elseif ($total >= 60) {
            $grade = 'C';
        } elseif ($total >= 31) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        ?>
<table border="" cellpadding="5" cellspacing="8">
    <tr><td>Nama Mahasiswa</td><td><?php echo $nm; ?></td>
    <tr><td>Nilai Absensi</td><td><?php echo $absen; ?></td>
    <tr><td>Nilai Tugas</td><td><?php echo $tugas; ?></td>
    <tr><td>Nilai Projek</td><td><?php echo $projek; ?></td>
    <tr><td>Total Nilai</td><td><?php echo $total; ?></td>
    <tr><td>Grade</td><td><?php echo $grade; ?></td>
</table>
<a href="pertemuan6.php">BACK</a>    
</pre>
    </center>


</body>

</html>