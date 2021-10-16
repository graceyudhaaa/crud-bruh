<div class="container">
    <div class="row mt-3">
        <h2>Form Tambah Data</h2>
        <form action="<?php echo base_url('mahasiswa/update'); ?>" method="post">
            <div class="col-4">
                <div class="mb-3">
                    <label for="nim" class="col-form-label">NIM:</label>
                    <input type="text" class="form-control" id="nim" value=<?= $detailMahasiswa->nim; ?> name="nim" readonly>
                    <?php echo form_error('nim'); ?>
                </div>
                <div class="mb-3">
                    <label for="nama" class="col-form-label">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $detailMahasiswa->nama; ?>">
                    <?php echo form_error('nama'); ?>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="col-form-label">Program Studi:</label>
                    <select class="form-select" aria-label="Default select example" name="prodi">
                        <!-- <option selected></option> -->
                        <option <?php echo $detailMahasiswa->prodi == 'Teknik Informatika' ? 'selected' : '';?>>Teknik Informatika</option>
                        <option <?php echo $detailMahasiswa->prodi == 'Sistem Informasi' ? 'selected' : '';?>>Sistem Informasi</option>
                    </select>
                    <?php echo form_error('prodi'); ?>
                </div>
                <br>
                <div class="mb-3">
                    <a href="" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>