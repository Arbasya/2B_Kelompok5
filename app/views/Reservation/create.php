<!-- app/views/user/create.php -->
<?php include '../public/header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Tambah Reservasi</h2>
    <div class="card shadow">
        <div class="card-body">
            <form action="/Reservation/store" method="POST">
                <div class="mb-3">
                    <label for="pengguna" class="form-label">Pengguna</label>
                    <input type="text" name="pengguna" id="pengguna" class="form-control" placeholder="Masukkan nama pengguna" required>
                </div>
                <div class="mb-3">
                    <label for="penginapan" class="form-label">Nama Villa</label>
                    <input type="text" name="penginapan" id="penginapan" class="form-control" placeholder="Masukkan nama villa" required>
                </div>
                <div class="mb-3">
                    <label for="tgl_reservasi" class="form-label">Tanggal Reservasi</label>
                    <input type="date" name="tgl_reservasi" id="tgl_reservasi" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                    <select name="status_pembayaran" id="status_pembayaran" class="form-select" required>
                        <option value="Lunas">Lunas</option>
                        <option value="Belum Lunas">Belum Lunas</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/Reservation/index" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../public/footer.php'; ?>