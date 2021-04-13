<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Kontrak Mahasiswa/title>
</head>

<body>
    <h1>Edit Kontrak Mahasiswa</h1>
    <a href="kontrak.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>Matakuliah_ID/label>
        <br>
        <input type="text" name="mk_id" value="<?php echo $data->matakuliah_id ?>">
        <br>
        <label>Nama Mahasiswa</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama_mhs ?>">
        <br>
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>

</html>