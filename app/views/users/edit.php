<!-- app/views/user/edit.php -->
<?php include '../../public/header.php'; ?>

<div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h2 class="text-center mb-4">Edit Pengguna</h2>
            <form action="/user5/update/<?php echo $user5['id_user5']; ?>" method="POST" class="w-75 mx-auto">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($user5['nama']); ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user5['email']); ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" value="<?php echo htmlspecialchars($user5['nomor_telepon']); ?>" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/user5/index" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../../public/footer.php'; ?>
