<html>

<head>
    <title>Input Data Mahasiswa</title>
</head>

<body bgcolor="aquamarine">
    <form action="tampilmahasiswa.php" method="post">
        <b>Pengelolaan Data Mahasiswa</b>
        <br>
        <pre>
Nama   : <input type="text" name="nama" size="25" maxlength="50">
Alamat :
<textarea name="alamat" cols="15" rows="4"></textarea>
</pre>
        Jenis Kelamin : <input type="radio" name="jeniskel" value="Pria">Laki-laki
        <input type="radio" name="jeniskel" value="Wanita">Perempuan
        <p>
            Pekerjaan : <select name="pekerjaan" id="">
                <option value="-Pilih-">
                <option value="Pelajar">Pelajar
                <option value="Karyawan">Karyawan
                <option value="Wirausaha">Wirausaha
                <option value="Lain-lain">Lain-lain
            </select>
        <p>
            Hobi :
            <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
            <input type="checkbox" name="hobi2" value="Musik">Musik
            <input type="checkbox" name="hobi3" value="Jalan-jalan">Jalan-jalan
        <p>
            <input type="Submit" value="Kirim"><input type="Reset" value="Batal">
    </form>
</body>

</html>