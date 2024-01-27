<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header animated fadeInUp">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>

                    </ol>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    <div class="container animated fadeInUp faster">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-11">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Menambah anak magang</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('admin/user/save') ?>">
                                
                                <div class="form-group mb-3">
                                    <label class="text-dark">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama..." name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>">
                                    <?= form_error('nama_lengkap', "<small class='text-danger'>", '</small>') ?>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="text-dark">Username</label>
                                    <input type="text" class="form-control" placeholder="Username..." name="username" value="<?= set_value('username') ?>">
                                    <?= form_error('username', "<small class='text-danger'>", '</small>') ?>
                                </div>
                                <div class="form-group row pb-3">
                                    <div class="col-sm-6 ">
                                        <label class="text-dark">Password</label>
                                        <input type="password" class="form-control" placeholder="Password.." name="password">
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="text-dark">Ulangi Password</label>
                                        <input type="password" class="form-control" placeholder="Ulangi password.." name="confirm_password">
                                        <?= form_error('password', "<small class='text-danger'>", '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-dark">Role</label>
                                    <select class="form-control text-dark" name="role">
                                        <option value="Siswa" <?= set_select('role', 'Siswa') ?>>Siswa</option>
                                        <option value="Mahasiswa" <?= set_select('role', 'Mahasiswa') ?>>Mahasiswa</option>
                                    </select>
                                </div>

                                <hr>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary mr-3">Simpan</button>
                            </form>
                            <a href="<?= base_url('admin/user') ?>" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>