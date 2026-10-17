<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku - Katalog Perpustakaan</title>
</head>
<body>
    <h2>Daftar Buku Perpustakaan</h2>
    <a href="index.php?page=buku&action=create">+ Tambah Buku Baru</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($buku)): ?>
            <tr>
                <td colspan="6" align="center">Belum ada data buku.</td>
            </tr>
            <?php else: ?>
                <?php foreach ($buku as $b): ?>
                <tr>
                    <td><?= htmlspecialchars($b['judul']) ?></td>
                    <td><?= htmlspecialchars($b['penulis']) ?></td>
                    <td><?= htmlspecialchars($b['penerbit']) ?></td>
                    <td><?= htmlspecialchars($b['tahun_terbit']) ?></td>
                    <td><?= htmlspecialchars($b['kategori']) ?></td>
                    <td>
                        <a href="index.php?page=buku&action=edit&id=<?= $b['id'] ?>">Edit</a>
                        <form method="post" action="index.php?page=buku&action=delete" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                            <input type="hidden" name="id" value="<?= $b['id'] ?>">
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>