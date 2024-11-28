<!-- app/views/Accommodations/edit.php -->
<?php include '../../public/header.php'; ?>

<div class="container my-5">
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="text-center mb-4">Edit Penginapan</h2>
        <form action="/Accommodations/update/<?php echo $Accommodations['id_accommodations']; ?>" method="POST" class="w-75 mx-auto">
            <div class="mb-3">
                <label for="nama_penginapan" class="form-label">Nama Penginapan:</label>
                <input type="text" name="nama_penginapan" id="nama_penginapan" class="form-control" value="<?php echo htmlspecialchars($Accommodations['nama_penginapan']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi:</label>
                <input type="text" name="lokasi" id="lokasi" class="form-control" value="<?php echo htmlspecialchars($Accommodations['lokasi']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="fasilitas" class="form-label">Fasilitas:</label>
                <input type="text" name="fasilitas" id="fasilitas" class="form-control" value="<?php echo htmlspecialchars($Accommodations['fasilitas']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?php echo htmlspecialchars($Accommodations['harga']); ?>" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="/Accommodations/index" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>

<?php include '../../public/footer.php'; ?>
