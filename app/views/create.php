<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku Baru</title>
</head>
<body>
    <h2>Tambah Data Buku</h2>
    <form method="post" action="index.php?page=buku&action=store">
        <label>Judul Buku</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Penerbit</label><br>
        <input type="text" name="penerbit" required><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" required><br><br>

        <button type="submit">Simpan Buku</button>
        <a href="index.php?page=buku">Batal / Kembali</a>
    </form>
</body>
</html>