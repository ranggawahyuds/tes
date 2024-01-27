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
                    <h1>Data Magang</h1>
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
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 style="margin-left:10px;">
                                <?= $this->Model->get_dataSiswa(['status' => 'disetujui'])->num_rows(); ?>
                            </h3>
                            <p style="margin-left:10px; font-weight:600;">SISWA SEDANG MAGANG</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <a href="<?= base_url('admin/siswa/status') ?>" class="small-box-footer" style="background: none;">
                            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 style="margin-left:10px;">
                                <?= $this->Model->get_dataSiswa(['status' => 'selesai'])->num_rows(); ?>
                            </h3>
                            <p style="margin-left:10px; font-weight:600;">SISWA SELESAI MAGANG</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <a href="<?= base_url('admin/siswa/selesai') ?>" class="small-box-footer" style="background: none;">
                            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color: #17b89a;">
                        <div class="inner">
                            <h3 style="margin-left:10px;">
                                <?= $this->Model->get_dataMahasiswa(['status' => 'disetujui'])->num_rows(); ?>
                            </h3>
                            <p style="margin-left:10px; font-weight:600;">MAHASISWA SEDANG MAGANG</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <a href="<?= base_url('admin/mahasiswa/status') ?>" class="small-box-footer" style="background: none;">
                            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box" style="background-color: #17b89a;">
                        <div class="inner">
                            <h3 style="margin-left:10px;">
                                <?= $this->Model->get_dataMahasiswa(['status' => 'selesai'])->num_rows(); ?>
                            </h3>
                            <p style="margin-left:10px; font-weight:600;">MAHASISWA SELESAI MAGANG</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <a href="<?= base_url('admin/mahasiswa/selesai') ?>" class="small-box-footer" style="background: none;">
                            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 style="margin-left:10px;">
                                <?= $this->Model->get_dataSiswa(['status' => 'pending'])->num_rows(); ?>
                            </h3>
                            <p style="margin-left:10px; font-weight:600;">SISWA PENGAJUAN </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-hourglass-half text-white"></i>
                        </div>
                        <a href="<?= base_url('admin/siswa/pengajuan') ?>" class="small-box-footer" style="background: none;">
                            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6">
                    <div class="small-box" style="background-color: #17b89a;">
                        <div class="inner">
                            <h3 style="margin-left:10px;">
                                <?= $this->Model->get_dataMahasiswa(['status' => 'pending'])->num_rows(); ?>
                            </h3>
                            <p style="margin-left:10px; font-weight:600;">MAHASISWA PENGAJUAN </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-hourglass-half text-white"></i>
                        </div>
                        <a href="<?= base_url('admin/mahasiswa/pengajuan') ?>" class="small-box-footer" style="background: none;">
                            Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>