 <div class="container">
    <div class="row mt-3">
        <h2>Data Mahasiswa Ilmu Komputer</h2>
        <?php $this->session->flashdata('message'); ?>
        <div class="row mt-2 mb-2">
            <div class="col-md-3">
                <a href="<?php echo base_url('mahasiswa/tambah'); ?>" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach($mahasiswa as $mhs):?>
                <tr>
                    <td><?php echo $mhs->nim ?></td>
                    <td><?php echo $mhs->nama ?></td>
                    <td><?php echo $mhs->prodi ?></td>
                    <td>
                        <a href="<?php echo base_url('mahasiswa/delete')."/".$mhs->nim; ?>" onclick="return confirm('Are you sure?')" class="btn btn-round btn-danger btn-sm" > Hapus </a>
                        <a href="<?php echo base_url('mahasiswa/edit')."/".$mhs->nim; ?>" class="btn btn-success btn-sm">Edit </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
    </div>