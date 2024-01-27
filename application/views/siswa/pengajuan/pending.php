<?php
if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header animated fadeInUp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?= $section ?> Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Siswa</li>
                    </ol>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content animated fadeInUp faster">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="table-responsive no-border">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center" width="15%">Program Studi</th>
                                            <th class="text-center" width="15%">Tanggal Registrasi</th>
                                            <th class="text-center" width="15%">Status</th>
                                            <th class="text-center" width="15%">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($registrasi as $data) {
                                            $id = str_replace(['=', '+', '/'], ['-', '_', '~',], $this->encryption->encrypt($data->id));
                                        ?>
                                            <tr>
                                                <td width="12px" class="text-center"><?= $no++; ?></td>
                                                <td><?= $data->nama_lengkap ?></td>
                                                <td><?= $data->jurusan ?></td>
                                                <td class="text-center"><?php echo date('d M Y', strtotime($data->createDate)); ?> </td>
                                                <td class="text-center"><span class="badge badge-warning">
                                                        <?php echo strtoupper($data->status) ?></span>
                                                </td>
                                                <td class="text-center">

                                                    <a href="<?= base_url('admin/siswa/pengajuan/detail/' . $id) ?>" class="btn btn-sm btn-dark" title="Detail">
                                                        <i class="fa fa-eye"></i> Detail
                                                    </a>
                                                    <a href="<?= base_url('admin/siswa/pengajuan/edit/' . $id) ?>" class="btn btn-sm btn-primary" title="Edit">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="<?= base_url('admin/siswa/pengajuan/delete/' . $id) ?>" class="btn btn-danger btn-sm hapus"><i class="fas fa-trash"></i> Hapus</a>
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
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $('.hapus').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal({
            title: 'PERINGATAN',
            text: "YAKIN INGIN HAPUS PENGAJUAN SISWA INI ?",
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