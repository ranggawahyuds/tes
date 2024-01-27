<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard <?= $section ?></title>
    <link rel="icon" href="<?= base_url('assets/') ?>img/logos.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta description="">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Sweet alert notification -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/sweetalert2/sweetalert2.min.css">
    <!-- Animated -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/animate/animate.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/adminlte.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script src="<?= base_url('assets/plugins/sweetalert/sweetalert.min.js'); ?>"></script>
    <style type="text/css">
        body::-webkit-scrollbar {
            display: none;
        }

        button.wh-ap-btn {
            outline: none;
            width: 55px;
            height: 55px;
            border: 0;
            background-color: #2ecc71;
            padding: 0;
            border-radius: 100%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            cursor: pointer;
            transition: opacity 0.3s, background 0.3s, box-shadow 0.3s;
        }

        button.wh-ap-btn::after {
            content: '';
            background-image: url('//i.imgur.com/cAS6qqn.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 60%;
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
        }

        button.wh-ap-btn:hover {
            opacity: 1;
            background-color: #20bf6b;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .wh-api {
            position: fixed;
            bottom: 0;
            right: 0;
        }

        .wh-fixed {
            margin-right: 15px;
            margin-bottom: 45px;
        }

        .wh-fixed>a {
            display: block;
            text-decoration: none;
        }

        .wh-fixed>a:hover button.wh-ap-btn::before {
            opacity: 1;
            width: auto;
            padding-top: 7px;
            padding-left: 10px;
            padding-right: 10px;
            width: 80px;
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= base_url('mahasiswa/dashboard') ?>" class="navbar-brand ml-2">
                    <img src="<?= base_url('assets/') ?>img/logos.png" alt="AdminLTE Logo" class="brand-image">
                    <span class="brand-text font-weight-light"><strong>SIAMANG | DISTPH</strong></span>
                </a>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item ml-2">
                            <a href="<?= base_url('mahasiswa/dashboard') ?>" class="nav-link">Dashboard</a>
                        </li>

                        <li class="nav-item ml-2">
                            <a href="<?= base_url('mahasiswa/pengajuan') ?>" class="nav-link">Pengajuan Magang</a>
                        </li>

                        <li class="nav-item ml-2">
                            <a href="<?= base_url('user/auth/logout') ?>" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Halo, <?php echo $this->session->userdata('nama_lengkap'); ?></a>
                        <!-- <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow animated slideInDown faster">
            <li><a href="<?= base_url('user/auth/logout') ?>" class="dropdown-item">Logout</a></li>
          </ul> -->
                    </li>

                    <button class="navbar-toggler order-1 border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <?php
        if (!defined('BASEPATH')) exit('No direct script access allowed');
        if ($content) {
            $this->load->view($content);
        }
        ?>
        <footer class="main-footer text-left small">
            <div class="float-right d-none d-sm-inline">
                <strong class="text-info">SIAMANG | DISTPH</strong>
            </div>
            <strong>Copyright &copy; 2023. All rights reserved.
        </footer>
        <div class="wh-api">
            <div class="wh-fixed">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=+6289696383566&text=Saya butuh bantuan">
                    <button class="wh-ap-btn"></button>
                </a>
            </div>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/js/adminlte.min.js') ?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js') ?>"></script>
    <!-- Event Kalender -->
    <script src="<?= base_url('assets/plugins/moment/moment.min.js') ?>"></script>
    <!-- page script -->
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