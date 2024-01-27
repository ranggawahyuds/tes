<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $section ?></title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/logos.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta description="">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/animate/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="<?= base_url('assets') ?>/plugins/sweetalert/sweetalert.min.js"></script>

</head>

<body class="hold-transition skin-black sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars text-white"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a style="cursor: default;" id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-white"> Halo, <?php echo $this->session->userdata('username'); ?>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('dashboard'); ?>" class="brand-link border-white bg-dark">
                <img src="<?= base_url('assets') ?>/img/logos.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-light"><strong> SIAMANG | Admin </strong></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex border-white">
                    <div class="image mt-2">
                        <img src="<?= base_url('assets') ?>/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-white"><?php echo $this->session->userdata('username'); ?><br><small>Administrator</small></a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header text-white">MENU DASHBOARD</li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/dashboard') ?>" class="nav-link text-white">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Mahasiswa
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/mahasiswa/pengajuan') ?>" class="nav-link">
                                        <i class="fa fa-caret-right ml-3 mr-1"></i>
                                        <p>Pengajuan Magang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/mahasiswa/status') ?>" class="nav-link">
                                        <i class="fa fa-caret-right ml-3 mr-1"></i>
                                        <p>Status</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/mahasiswa/selesai') ?>" class="nav-link">
                                        <i class="fa fa-caret-right ml-3 mr-1"></i>
                                        <p>Selesai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Siswa
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/siswa/pengajuan') ?>" class="nav-link">
                                        <i class="fa fa-caret-right ml-3 mr-1"></i>
                                        <p>Pengajuan Magang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/siswa/status') ?>" class="nav-link">
                                        <i class="fa fa-caret-right ml-3 mr-1"></i>
                                        <p>Status</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin/siswa/selesai') ?>" class="nav-link">
                                        <i class="fa fa-caret-right ml-3 mr-1"></i>
                                        <p>Selesai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/user') ?>" class="nav-link text-white">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/user/ubah_password') ?>" class="nav-link text-white">
                                <i class="nav-icon fas fa-key"></i>
                                <p>Ubah Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/auth/logout') ?>" class="nav-link text-white">
                                <i class="nav-icon fa fa-sign-out"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <?php
        if (!defined('BASEPATH')) exit('No direct script access allowed');
        if ($content) {
            $this->load->view($content);
        }
        ?>
    </div>

    <footer class="main-footer text-left small">
        <div class="float-right d-none d-sm-inline">
            <strong class="text-info">Distph | Internship</strong>
        </div>
        <strong>Copyright &copy; 2023 <a href="https://adminlte.io"></a>.</strong> All rights reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
    </div>

    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url('assets') ?>/plugins/inputmask/inputmask.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/adminlte.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/moment/moment.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#example1").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });

            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })

            $(function() {
                var title = '<?= $this->session->flashdata("title") ?>';
                var text = '<?= $this->session->flashdata("text") ?>';
                var type = '<?= $this->session->flashdata("type") ?>';
                if (title) {
                    Swal.fire({
                        title: title,
                        text: text,
                        type: type,
                        button: true,
                    });
                };
            });
        });
    </script>
</body>

</html>