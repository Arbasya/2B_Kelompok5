<!-- app/views/Accommodations/index.php -->
<?php include '../public/header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Daftar Penginapan</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="/Accommodations/create" class="btn btn-primary">Tambah Penginapan Baru</a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama Penginapan</th>
                <th>Lokasi</th>
                <th>Fasilitas</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-secondary">
            <?php foreach ($Accommodations as $key => $accommodation): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= htmlspecialchars($accommodation['nama_penginapan']) ?></td>
                    <td><?= htmlspecialchars($accommodation['lokasi']) ?></td>
                    <td><?= htmlspecialchars($accommodation['fasilitas']) ?></td>
                    <td><?= htmlspecialchars($accommodation['harga']) ?></td>
                    <td>
                        <a href="/Accommodations/edit/<?php echo $accommodation['id_accommodations']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/Accommodations/delete/<?php echo $accommodation['id_accommodations']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../public/footer.php'; ?>
