<!-- app/views/reservation/edit.php -->
<?php include '../public/header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Edit Reservasi</h2>
    <div class="card shadow">
        <div class="card-body">
            <form action="/Reservation/update/<?php echo $user['id_reservations']; ?>" method="POST">
                <div class="mb-3">
                    <label for="pengguna" class="form-label">Pengguna</label>
                    <input type="text" id="pengguna" name="pengguna" class="form-control"
                        value="<?php echo htmlspecialchars($user['pengguna']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="penginapan" class="form-label">Nama Villa</label>
                    <input type="text" id="penginapan" name="penginapan" class="form-control"
                        value="<?php echo htmlspecialchars($user['penginapan']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tgl_reservasi" class="form-label">Tanggal Reservasi</label>
                    <input type="date" id="tgl_reservasi" name="tgl_reservasi" class="form-control"
                        value="<?php echo htmlspecialchars($user['tgl_reservasi']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                    <select id="status_pembayaran" name="status_pembayaran" class="form-select" required>
                        <option value="Lunas" <?php echo $user['status_pembayaran'] === 'Lunas' ? 'selected' : ''; ?>>Lunas</option>
                        <option value="Belum Lunas" <?php echo $user['status_pembayaran'] === 'Belum Lunas' ? 'selected' : ''; ?>>Belum Lunas</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/Reservation/index" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../public/footer.php'; ?>