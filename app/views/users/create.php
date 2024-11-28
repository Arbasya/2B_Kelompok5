<!-- app/views/user/create.php -->
<?php include '../public/header.php'; ?>

<div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h2 class="text-center mb-4">Tambah Pengguna Baru</h2>
            <form action="/user5/store" method="POST" class="w-75 mx-auto">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                    <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/user5/index" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../public/footer.php'; ?>
