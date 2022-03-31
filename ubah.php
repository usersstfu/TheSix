<?php

require 'function.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan ID
$mhs = query("SELECT * FROM umumkan WHERE id = $id")[0];

// cek tombol submit sdh ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'sunting.php';
				</script>
		";
    } else {
        echo "
		<script>
					alert('data gagal diubah!');
					document.location.href = 'ubah.php';
				</script>
		";
    }
}


?>





<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Pengumuman</title>
    <link rel="stylesheet" href="css/ubah.css" type="text/css">
</head>

<body>
    <div class="main">
        <div class="ubah">
            <h1>Ubah Pengumuman </h1>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
                <ul>
                    <li>
                        <label for="judul">Judul : </label>
                        <input type="text" name="judul" id="judul" required value="<?php echo $mhs["judul"]; ?>">
                    </li>
                    <li>
                        <label for="isi">Isi : </label>
                        <textarea name="isi" id="isi" cols="30" rows="10" required value="<?php echo $mhs["isi"]; ?>"></textarea>
                    </li>
                    <li>
                        <button type="submit" name="submit">Ubah Data!</button>
                    </li>
                </ul>
            </form>

</body>

</html>