<?php
if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header animated fadeInUp">
        <div class="container">
            <div class="row">

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content animated fadeInUp faster">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline">
                        <div class="card-header" style="background-color: #17b89a;">
                            <h5 class="card-title m-0"><i class="fas fa-edit"></i> Form Pengajuan </h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('siswa/pengajuan/update') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="hidden" value="<?= $this->session->userdata('id_user'); ?>" name="id_user">
                                    <input type="text" class="form-control" readonly value="<?= $this->session->userdata('nama_lengkap'); ?>" name="nama_lengkap">
                                    <span class="text-red"><?= form_error('nama_lengkap') ?></span>
                                </div>

                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="text" class="form-control" name="nisn" placeholder="e.g. 12164440" value="<?= set_value('nisn') ?>">
                                    <span class="text-red"><?= form_error('nisn') ?></span>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Anggota Kelompok</label>
                                    <input type="text" class="form-control" name="anggota_kelompok" placeholder="e.g. 5 Orang, kosongkan jika sendiri" value="<?= set_value('anggota_kelompok') ?>">
                                    <span class="text-red"><?= form_error('anggota_kelompok') ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <label>No. Hp/Wa</label>
                                    <input type="text" class="form-control" name="no_hp" placeholder="e.g. 089696xxxxxx" value="<?= set_value('no_hp') ?>">
                                    <span class="text-red"><?= form_error('no_hp') ?></span>
                                </div>

                                <div class="form-group">
                                    <label>Sekolah</label>
                                    <input type="text" class="form-control" name="sekolah" placeholder="e.g. SMK N 1 Pontianak" value="<?= set_value('sekolah') ?>">
                                    <span class="text-red"><?= form_error('sekolah') ?></span>
                                </div>

                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan" placeholder="e.g. Pertanian" value="<?= set_value('jurusan') ?>">
                                    <span class="text-red"><?= form_error('jurusan') ?></span>
                                </div>

                                <div class="form-group">
                                    <label>Estimasi Magang</label>
                                    <input type="text" class="form-control" name="lama_magang" placeholder="e.g. 3 Bulan" value="<?= set_value('lama_magang') ?>">
                                    <span class="text-red"><?= form_error('lama_magang') ?></span>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-outline">
                        <div class="card-header" style="background-color: #17b89a;">
                            <h5 class="card-title m-0"><i class="fas fa-file"></i> Surat Pengantar</h5>
                        </div>
                        <div class="card-body"><p><b>PDF ONLY</b></p>
                            <input class="mt-2" type="file" name="surat" id="imgInp" value="<?= set_value('surat') ?>">
                            <span class="text-danger"><?= form_error('surat') ?></span>
                            <p>
                            <?php if (isset($error)) : ?>
                                <div class="alert alert-danger"><?= $error ?></div>
                            <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <div class="alert alert-dismissible" style="background-color: #17b89a;">
                        <h5><i class="fas fa-info-circle"></i> Info!</h5>
                        Sebelum mengupload foto surat pengantar, harap untuk diperiksa kembali agar mengurangi kesalahan.
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block mb-3" style="background-color: #17b89a;">Submit</button>
        </div>
    </div>
</div>

</form>
<!-- /.content-wrapper -->
<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    };
</script>