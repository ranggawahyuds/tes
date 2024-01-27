<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header animated fadeInUp faster">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Detail Pengajuan Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= site_url('admin/mahasiswa/status') ?>">Status</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button type="button" onclick="window.history.go(-1)" class="btn btn-flat btn-info btn-sm"><i class="fas fa-arrow-left"></i> Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <?php foreach ($detail as $data) 
    $id = str_replace(['=','+','/'],['-','_','~',], $this->encryption->encrypt($data->id));{ ?>
        <!-- Main content -->
        <div class="content animated fadeInUp faster">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card card-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-info p-2">
                            <a href="<?= base_url('assets/photo/' . $data->photo) ?>" target="_blank">
                                    <div class="widget-user-image">
                                        <?php if ($data->photo == '') { ?>
                                            <img class="img-rounded elevation-2" src="<?= base_url('assets/suratpengantar/default.png') ?>" alt="User Avatar">
                                        <?php } else { ?>
                                            <img class="img-rounded elevation-2" src="<?= base_url('assets/photo/' . $data->photo) ?>" alt="User Avatar">
                                        <?php } ?>
                                    </div>
                                </a>
                                
                                <!-- /.widget-user-image -->
                                <h3 class="widget-user-username"><?php echo $data->nama_lengkap ?></h3>
                                <h5 class="widget-user-desc"><?= $data->role ?></h5>
                            </div>
                            <div class="card-footer p-0">
                                <table id="example1" class="table table-striped">
                                    <tr>
                                        <th width="30%">Nama Lengkap</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->nama_lengkap ?></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">NIM</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->nim ?></td>
                                    </tr>
                                    
                                    <tr>
                                        <th width="30%">Jumlah Anggota Kelompok</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->anggota_kelompok ?></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Universitas</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->universitas ?></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Program Studi</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->program_studi ?></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">No Kontak/WA</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->no_hp ?></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">lama magang</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->lama_magang ?></td>
                                    </tr>

                                    <tr>
                                        <th width="30%">Periode magang</th>
                                        <td width="1%">:</td>

                                        <?php if ($data->mulai_magang === null || $data->selesai_magang === null) { ?>
                                            <td>Belum di isi</td>
                                        <?php } else { ?>
                                            <td>
                                            <?php echo date('d M Y', strtotime($data->mulai_magang)) ?> -
                                            <?php echo date('d M Y', strtotime($data->selesai_magang)) ?>
                                        <?php } ?>
                                        </td>


                                    </tr>

                                    <tr>
                                        <th width="30%">Status Pengajuan</th>
                                        <td width="1%">:</td>
                                        <?php if ($data->status == 'disetujui') { ?>
                                            <td class="text-success"><strong><?php echo strtoupper($data->status) ?></strong></td>
                                        <?php } else if ($data->status == 'pending') { ?>
                                            <td class="text-warning"><strong><?php echo strtoupper($data->status) ?></strong></td>
                                        <?php } else { ?>
                                            <td class="text-danger"><strong><?php echo strtoupper($data->status) ?></strong></td>
                                        <?php } ?>
                                    </tr>

                                    <tr>
                                        <th width="30%">Keterangan</th>
                                        <td width="1%">:</td>
                                        <td><?php echo $data->keterangan ?></td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card card-outline">
                            <div class="card-header bg-info">
                                <h5 class="card-title m-0"><i class="fas fa-file-alt"></i> Surat Pengantar</h5>
                            </div>
                            <div class="card-body p-1">
                                <a href="<?= base_url('assets/suratpengantar/' . $data->surat) ?>" target="_blank">
                                    <iframe width="100%" height="500" type="application/pdf" id="blah" alt="Foto Surat Pengantar" src="<?= base_url('assets/suratpengantar/' . $data->surat)?>"></iframe>
                                   </a>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    <?php } ?>
</div>
<!-- /.content-wrapper -->
<script src="<?= base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
