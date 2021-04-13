<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Kontrak</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="kontrak.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>ID_Matakuliah</label>
        <br>
        <input type="number" name="matakuliah_id">
        <br>
        <label>Id_Mahasiswa</label>
        <br>
        <input type="number" name="mhs_id">
        <br>
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>