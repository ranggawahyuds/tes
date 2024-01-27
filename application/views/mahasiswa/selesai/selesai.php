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
                    <h1><?= $section ?> Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa</li>
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
                                            <th class="text-center">Program Studi</th>
                                            <th class="text-center">Tanggal Selesai</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>

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
                                                <td><?= $data->program_studi ?></td>
                                                <td class="text-center"> <?php echo date('d M Y', strtotime($data->selesai_magang)) ?> </td>
                                                <td class="text-center"><span class="badge badge-success">
                                                        <?php echo strtoupper($data->status) ?></span>
                                                </td>
                                                <td class="text-center" width="12%">
                                                    <a href="<?= base_url('admin/mahasiswa/selesai/detail/' . $id) ?>" class="btn btn-sm btn-dark" title="Detail"><i class="fa fa-eye"></i> Detail</a>
                                                    <a href="<?= base_url('admin/mahasiswa/selesai/edit/' . $id) ?>" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                                                    
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