<?php
require 'function.php';
$umumkan = query("SELECT * FROM umumkan");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/sunting.css">
</head>

<body>
    <h1>Daftar Pengumuman</h1>
    <a href="tambah.php"><button>Tambah Data</button></a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Judul</th>
            <th>Isi</th>
        </tr>
        <br>
        <?php $i = 1; ?>
        <?php foreach ($umumkan as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
                <td><?php echo $row["judul"]; ?></td>
                <td><?php echo $row["isi"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <br><br>
    <a href="cat-peng.php"><button>Lihat List Pengumuman</button></a>
</body>

</html>