<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Matakuliah/title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="matakuliah.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>ID</label>
        <br>
        <input type="text" name="ID">
        <br>
        <label>Nama MK</label>
        <br>
        <input type="text" name="nama_mk">
        <br>
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>