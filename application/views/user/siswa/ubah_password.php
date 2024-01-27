<?php
if ($this->session->flashdata('info')) echo $this->session->flashdata('info');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header animated fadeInUp">
        <div class="container">
            <div class="row">

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content animated fadeInUp faster">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-outline">
                        <div class="card-header" style="background-color: #17b89a;">
                            <h5 class="card-title m-0"><i class="fas fa-edit"></i> Ubah Password </h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('siswa/user/update') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="hidden" value="<?= $this->session->userdata('id_user'); ?>" name="id_user">
                                    <input type="password" class="form-control"  name="password" placeholder="New Password">
                                    <span class="text-red"><?= form_error('password') ?></span>
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" >
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-block mb-3" style="background-color: #17b89a;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.content-wrapper -->
<!-- jQuery -->
<script src="<?= base_url('include/assets/plugins/jquery/jquery.min.js') ?>"></script>
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