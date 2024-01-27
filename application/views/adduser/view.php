<?php
if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header animated fadeInUp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="h3 text-gray-800">Overview Data <?= $section ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>

                    </ol>
                </div><!-- /.col -->
            </div>

        </div>
    </div>
    <div class="content animated fadeInUp faster">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <!-- Page Heading -->
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex">
                                <div>
                                    <span class="m-0 font-weight-bold text-primary">Data <?= $section ?></span>
                                </div>
                                <div class="ml-auto">
                                    <a class="btn btn-sm btn-primary text-light" href="<?= base_url('admin/user/add') ?>"><i class="fa fa-plus"></i> <b>Tambah</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive no-border">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center" width="15%">Username</th>
                                                <th class="text-center" width="15%">Role</th>
                                                <th class="text-center" width="15%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($user as $data) {
                                                $id = str_replace(['=', '+', '/'], ['-', '_', '~',], $this->encryption->encrypt($data->id_user));
                                            ?>
                                                <tr>
                                                    <td width="12px" class="text-center"><?= $no++; ?></td>
                                                    <td><?= $data->nama_lengkap ?></td>
                                                    <td><?= $data->username ?></td>
                                                    <td class="text-center"><?= $data->role ?> </td>
                                                    <td class="text-center">
                                                        <?php if ($data->role == 'admin') { ?>
                                                            <a href="#" class="btn btn-secondary btn-sm disabled"><i class="fas fa-ban"></i> NO ACTION</a>
                                                        <?php } else { ?>
                                                            <a href="<?= base_url('admin/user/delete/' . $id) ?>" class="btn btn-danger btn-sm hapus"><i class="fas fa-trash"></i> Hapus</a>
                                                            <a href="<?= base_url('admin/user/reset/' . $id) ?>" class="btn btn-info btn-sm reset"><i class="nav-icon fas fa-key"></i> Reset</a>
                                                        <?php } ?>
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
    <script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $('.hapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');

            Swal({
                title: 'PERINGATAN',
                text: "HAPUS AKUN ?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Konfirmasi',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            })
        });
    </script>