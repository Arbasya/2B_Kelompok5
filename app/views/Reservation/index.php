<!-- app/views/user/index.php -->
<?php include '../public/header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Daftar Reservasi</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="/Reservation/create" class="btn btn-primary">Tambah Reservasi Baru</a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Nama Villa</th>
                <th>Tanggal Reservasi</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-secondary">
            <?php foreach ($users as $key => $user): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= htmlspecialchars($user['pengguna']) ?></td>
                    <td><?= htmlspecialchars($user['penginapan']) ?></td>
                    <td><?= htmlspecialchars($user['tgl_reservasi']) ?></td>
                    <td><?= htmlspecialchars($user['status_pembayaran']) ?></td>
                    <td>
                        <a href="/Reservation/edit/<?php echo $user['id_reservations']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/Reservation/delete/<?php echo $user['id_reservations']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../public/footer.php'; ?>