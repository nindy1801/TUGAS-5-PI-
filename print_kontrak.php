<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Kontrak</title>
    <style>
        h1 {
        text-align: center;
        }
        table,
        td,
        th {
        border: 1px solid #ddd;
        text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th,
        td {
        padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Laporan Kontrak Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>matakuliah_id</th>
                <th>Id_Mahasiswa</th>
                </tr>
        </thead>
        <tbody>
            <?php

            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->mk_id ?></td>
                        <td><?= $data->nama ?></td>
                        </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel kontrak mahasiswa.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>