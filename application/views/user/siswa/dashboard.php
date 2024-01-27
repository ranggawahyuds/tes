<?php
if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header animated fadeInUp faster">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="alert" style="background-color: #17b89a;">
                        <h5><i class="fas fa-info-circle"></i> Info</h5>
                        <p>Lengkapi profil anda dengan menambahkan foto anda, agar kami mengetahui siapa anda</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="alert" style="background-color: #17b89a;">
                        <h5><i class="fas fa-info-circle"></i> Selamat datang di Panel <?= $section ?></h5>
                        <p>Untuk memulai pengajuan magang silahkan menuju ke menu <i><b>Pengajuan Magang</b></i>, Kemudian isi data-data lengkap beserta foto surat pengantar dari sekolah dan jika sudah selesai mengisi form tekan tombol submit lalu kami akan melakukan tahap verifikasi</p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content animated fadeInUp faster">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <form method="POST" action="<?= base_url('siswa/dashboard/update_foto') ?>" enctype="multipart/form-data">
                                <div class="text-center">
                                    <?php foreach ($profil as $data_photo) { ?>
                                        <?php if ($data_photo->photo == '') { ?>
                                            <img id="blah" class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/default.png') ?>" alt="User Avatar">
                                        <?php } else { ?>
                                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/photo/' . $data_photo->photo); ?>" alt="User profile picture" style="height: 110px; width: 110px;" id="blah">
                                        <?php } ?>
                                </div>

                                <h3 class="profile-username text-center"><?php echo $this->session->userdata('nama_lengkap'); ?></h3>

                                <p class="text-muted text-center"><?php echo $this->session->userdata('role'); ?></p>

                                <?php if ($data_photo->photo == NULL) { ?>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Upload</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="photo" id="imgInp">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                    <?php if (isset($error)) : ?>
                                                        <div class="alert alert-danger"><?= $error ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <button type="submit" class="btn btn-block" style="background-color: #17b89a;"><b>Update Foto</b></button>
                                <?php } else { ?>
                                    <div class="alert alert-success" style="border-radius: 6rem; width: 4.9rem; margin:auto;">
                                        <i class="fas fa-check fa-3x text-white text-center d-block" style="transform: translate(-4px, 0px);"></i>
                                    </div>
                            <?php }
                                    } ?>
                            </form>
                            <div class=" text-center mt-3">
                                <a href="<?= base_url('siswa/user/ubah_password') ?>" class="btn btn-block btn-primary"> <b>ubah password</b> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card card-outline">
                        <div class="card-header" style="background-color: #17b89a;">
                            <h5 class="card-title m-0"><i class="fas fa-edit"></i> History Pengajuan Terakhir</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive no-border">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">NIM</th>
                                            <th class="text-center">Universitas</th>
                                            <th class="text-center">Tanggal Pengajuan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($pengajuan as $my_data) {
                                        ?>
                                            <tr class="text-center">
                                                <td><?php echo $no++; ?></td>
                                                <td class="text-left"><?php echo $my_data->nama_lengkap ?></td>
                                                <td><?php echo $my_data->nisn ?></td>
                                                <td><?php echo $my_data->sekolah ?></td>
                                                <td><?php echo date('d M Y', strtotime($my_data->createDate)) ?></td>
                                                <td>
                                                    <?php if ($my_data->status == "pending") { ?>
                                                        <span class="badge badge-warning text-white"><?php echo strtoupper($my_data->status) ?></span>
                                                    <?php } else if ($my_data->status == "ditolak") { ?>
                                                        <span class="badge badge-danger"><?php echo strtoupper($my_data->status) ?></span>
                                                    <?php } else if ($my_data->status == "disetujui") { ?>
                                                        <span class="badge badge-success"><?php echo strtoupper($my_data->status) ?></span>
                                                    <?php } else if ($my_data->status == "selesai") { ?>
                                                        <span class="badge badge-success"><?php echo strtoupper($my_data->status) ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td class="text-justify">
                                                    <?php echo $my_data->keterangan ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>