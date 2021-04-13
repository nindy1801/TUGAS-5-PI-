<?php
include 'model.php';

// tabel nilai
if (isset($_POST['submit_simpan'])) {
 $nim = $_POST['nim']; $nama = $_POST['nama'];
 $uts = $_POST['uts'];
 $uas = $_POST['uas'];
 $tugas = $_POST['tugas'];
 $model = new Model();
 $model->insert($nim, $nama, $uts, $uas, $tugas);
 header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $uts = $_POST['uts'];
 $uas = $_POST['uas'];
 $tugas = $_POST['tugas'];
 $model = new Model();
 $model->update($nim, $nama, $uts, $tugas,$uas);
 header('location:index.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:index.php');
}

// tabel mahasiswa
if (isset($_POST['submit_simpan_mhs'])) {
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $alamat = $_POST['alamat'];
 $no_tlp = $_POST['no_tlp'];
 $email = $_POST['email'];
 $model = new Model();
 $model->insert_mhs($id, $nama, $semester, $alamat, $no_tlp, $email);
 header('location:mahasiswa.php');
}
if (isset($_POST['submit_edit_mhs'])) {
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $alamat = $_POST['alamat'];
 $no_tlp = $_POST['no_tlp'];
 $email = $_POST['email'];
 $model = new Model();
 $model = new Model();
 $model->update_mhs($id, $nama, $semester, $alamat, $no_tlp, $email);
 header('location:mahasiswa.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete_mhs($id);
 header('location:mahasiswa.php');
}


// tabel absen
if (isset($_POST['submit_simpan_absen'])) {
 $id = $_POST['id'];
 $mhs_id = $_POST['mhs_id'];
 $matakuliah_id = $_POST['matakuliah_id'];
 $waktu_absen = $_POST['waktu_absen'];
 $status = $_POST['status'];
 $model = new Model();
 $model->insert_absen($id, $mhs_id, $matakuliah_id, $waktu_absen, $status);
 header('location:absen.php');
}
if (isset($_POST['submit_edit_absen'])) {
 $id = $_POST['id'];
 $mhs_id = $_POST['mhs_id'];
 $matakuliah_id = $_POST['matakuliah_id'];
 $waktu_absen = $_POST['waktu_absen'];
 $status = $_POST['status'];
 $model = new Model();
 $model->update_absen($id, $mhs_id, $matakuliah_id, $waktu_absen, $status);
 header('location:absen.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete_absen($id);
 header('location:absen.php');
}
// tabel kontrak
if (isset($_POST['submit_simpan'])) {
$mk_id = $_POST['mk_id'];
$mhs_id = $_POST['mhs_id'];$model = new Model();
 $model->insert_kontrak($mk_id, $mhs_id);
header ('location : kontrak.php');
}
if (isset($_POST['submit_edit'])) {
 $mk_id = $_POST['mk_id'];
 $nama = $_POST['mhs_id'];
 $model = new Model();
 $model->update($mk_id, $mhs_id);
 header('location:kontrak.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:kontrak.php');
}
// tabel mata kuliah
if (isset($_POST['submit_simpan'])) {
    $nim = $_POST['nim'];
    $nama_mk = $_POST['nama_mk'];
    $model = new Model();
    $model->insert($mk_id, $nama);
    header ('location : matakuliah.php');
    }
    if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama_mk = $_POST['nama_mk'];
     $model = new Model();
     $model->update($mk_id, $nama);
     header('location:matakuliah.php');
    }
    if (isset($_GET['nim'])) {
     $id = $_GET['nim'];
     $model = new Model();
     $model->delete($id);
     header('location:matakuliah.php');
    }