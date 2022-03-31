<?php

require 'function.php';

// cek tombol submit sdh ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'sunting.php';
				</script>
		";
    } else {
        echo "
		<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'tambah.php';
				</script>
		";
    }
}


?>





<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Pengumuman</title>
    <link rel="stylesheet" href="css/tambah.css" type="text/css">
</head>

<body>
    <div class="main">
        <div class="tambah">
            <h1>Pengumuman Baru</h1>
            <form id="tambah" action="" method="post">
                <ul>
                    <li>
                        <label for="judul">Judul : </label>
                        <input type="text" name="judul" id="judul" required>
                    </li>
                    <li>
                        <label for="isi">Isi : </label>
                        <textarea name="isi" id="isi" cols="30" rows="10"></textarea>
                    </li>
                    <li>
                        <button type="submit" name="submit">Tambah Data!</button>

                    </li>
                    </li>
                </ul>
            </form>

</body>

</html>