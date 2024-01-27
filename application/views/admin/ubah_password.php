<?php
if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Password?</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container">
        <h1 class="h3 mb-5">
            Ubah Password
        </h1>
        <div class="row">
            <div class="col-lg-6">
                <form action="<?= base_url('admin/user/update') ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" value="<?= $this->session->userdata('id_user'); ?>" name="id_user">
                        <label for="new_password">New Password</label>
                        <input type="password" class="form-control" name="password" id="new_password" placeholder="New Password">
                        <span class="text-red"><?= form_error('password') ?></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>