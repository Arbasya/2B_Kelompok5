<!-- app/views/user/index.php -->
<?php include '../../public/header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Daftar Pengguna</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="/user5/create" class="btn btn-primary">Tambah Pengguna Baru</a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-secondary">
            <?php foreach ($user5 as $key => $user): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= htmlspecialchars($user['nama']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['nomor_telepon']) ?></td>
                    <td>
                        <a href="/user5/edit/<?php echo $user['id_user5']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/user5/delete/<?php echo $user['id_user5']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../../public/footer.php'; ?>
