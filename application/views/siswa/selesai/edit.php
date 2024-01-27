<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header animated fadeInUp faster">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="container animated fadeInUp faster">
        <div class="">
            <div class="">
                <div class="col-lg-5 mx-auto">
                    <div class="card card-info">
                        <div class="card-header text-center bg-dark">
                            <h5 class="card-title"><h5>Edit <?= $section ?> Siswa</h5></h5>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('flash') ?>
                            <!-- Date dd/mm/yyyy -->
                            <form method="POST" action="<?= base_url('admin/siswa/selesai/update') ?>">
                                <?php
                                foreach ($registrasi as $data) :
                                    $id = str_replace(['=', '+', '/'], ['-', '_', '~'], $this->encryption->encrypt($data->id));
                                ?>
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <div class="from-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap', $data->nama_lengkap) ?>" readonly>
                                        <?= form_error('nama_lengkap', "<small class='text-danger'>", '</small>') ?>
                                    </div>

                                    <div class="from-group">
                                        <label for="">Nisn</label>
                                        <input type="number" class="form-control" name="nisn" placeholder="Nisn" value="<?= set_value('nisn', $data->nisn)  ?>">
                                        <?= form_error('nisn', "<small class='text-danger'>", '</small>') ?>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Sekolah</label>
                                        <input type="text" class="form-control" name="sekolah" placeholder="Sekolah" value="<?= set_value('sekolah', $data->sekolah)  ?>">
                                        <?= form_error('sekolah', "<small class='text-danger'>", '</small>') ?>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Jurusan</label>
                                        <input type="text" class="form-control" name="jurusan" placeholder="Jurusan" value="<?= set_value('jurusan', $data->jurusan)  ?>">
                                        <?= form_error('jurusan', "<small class='text-danger'>", '</small>') ?>
                                    </div>
                                    <div class="from-group">
                                        <label for="">No Kontak/WA</label>
                                        <input type="number" class="form-control" name="no_hp" placeholder="No Kontak/WA" value="<?= set_value('no_hp', $data->no_hp)  ?>">
                                        <?= form_error('no_hp', "<small class='text-danger'>", '</small>') ?>
                                    </div>

                                    <div class="from-group">
                                        <label>Tanggal Mulai/Selesai:</label>
                                        <div class="col-lg-12" >
                                            <input type="date" id="mulai_magang" name="mulai_magang" value="<?= set_value('mulai_magang', $data->mulai_magang) ?>" required> -
                                            <input type="date" id="selesai_magang" name="selesai_magang" value="<?= set_value('selesai_magang', $data->selesai_magang) ?>" required>
                                        </div>
                                    </div>
                                    <div class="from-group">
                                        <label>Status</label>
                                        <select class="form-control text-dark" name="status">
                                            <option value="disetujui" <?= ($data->status == 'disetujui') ? 'selected' : '' ?> <?= set_select('status', 'disetujui') ?>>
                                                Disetujui
                                            </option>
                                            <option value="ditolak" <?= ($data->status == 'ditolak') ? 'selected' : '' ?> <?= set_select('status', 'ditolak') ?>>
                                                Ditolak
                                            </option>
                                            <option value="pending" <?= ($data->status == 'pending') ? 'selected' : '' ?> <?= set_select('status', 'pending') ?>>
                                                Pending
                                            </option>
                                            <option value="selesai" <?= ($data->status == 'selesai') ? 'selected' : '' ?> <?= set_select('status', 'selesai') ?>>
                                                Selesai
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keterangan</label>
                                        <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan" style="height: 100px;"></textarea>
                                        <?= form_error('Keterangan', "<small class='text-danger'>", '</small>') ?>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" onclick="window.history.go(-1)" class="btn btn-default"><i class="fas fa-times"></i> Batal</button>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                    </div>
                                <?php endforeach ?>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    