<form action="" method="post">
    <h1>
        TanggaL Lahir &nbsp :
        <!-- looping while -->
        <select name="tgl">
            <option value="-Tanggal-">-Tanggal-</option>
            <?php
            $a = 1;
            while ($a <= 31) {
                echo "<option value = '$a'>$a</option>";
                echo $a++;
            }
            ?>
        </select>
        <!-- looping foreach -->
        <select name="bln">
            <option value="-Bulan-">-Bulan-</option>
            <?php
            $bulan = array(
                "January",
                "February",
                "March",
                "April",
                "Mey",
                "Juny",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            );
            foreach ($bulan as $bln) {
                echo "<option value='$bln'>$bln</option>";
            }
            ?>
        </select>
        <!-- looping do while -->
        <select name="thn">
            <option value="-thn-">-Tahun-</option>
            <?php
            $b = 1990;
            $skrg = date("Y");
            do {
                echo "<option value='$b'>$b</option>";
                echo $b++;
            } while ($b <= $skrg);
            ?>
        </select>
        Pekerjaan ;
        <select name="job">
            <option value="-Pilih-">-Pekerjaan-
            <option value="Pelajar">Pelajar
            <option value="Karyawan">Karyawan
            <option value="Wirausaha">Wirausaha
            <option value="Lain-lain">Lain-lain
        </select>
        <p>
            <input type="submit" value="Kirim"><input type="reset" value="Batal">
</form>
<pre>

<?php
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$kerja = $_POST['job'];
// if ($kerja == 'Pelajar') {
//     $bonus = 'sim card';
// } elseif ($kerja == 'Karyawan') {
//     $bonus = 'jas hujan';
// } else {
//     $bonus = 'payung';
// }

switch ($kerja) {
    case 'Pelajar':
        $bonus = 'sim card';
        break;

    case 'Karyawan':
        $bonus = 'jas hujan';
        break;

    default:
        $bonus = 'payung';
}
echo "Tanggal lahir yang dipilih : $tgl $bln $thn <br>";
echo "pekerjaan : $kerja dan dapat bonusnya $bonus";
?>