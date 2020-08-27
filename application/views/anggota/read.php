<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('anggota'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('anggota'); ?>">Anggota</a></div>
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Detail Anggota</h2>
            <?php echo $this->session->userdata('message'); ?>
            <div class="row mt-sm-4">
                <!-- Data Diri -->
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form action="<?= base_url('anggota/update/') . $anggota['id']; ?>" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Data Diri Anggota</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Username</label>
                                        <input type="text" class="form-control <?= form_error('user_id') != null ? 'is-invalid' : ''; ?>" name="user_id" id="user_id" placeholder="Username" value="<?php echo $anggota['user_id']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('user_id') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Nama</label>
                                        <input type="text" class="form-control <?= form_error('nama') != null ? 'is-invalid' : ''; ?>" name="nama" id="nama" placeholder="Nama" value="<?php echo $anggota['nama']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Nik</label>
                                        <input type="number" class="form-control <?= form_error('nik') != null ? 'is-invalid' : ''; ?>" name="nik" id="nik" placeholder="Nik" value="<?php echo $anggota['nik']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nik') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Tempat Lahir</label>
                                        <input type="text" class="form-control <?= form_error('tempat_lahir') != null ? 'is-invalid' : ''; ?>" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $anggota['tempat_lahir']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tempat_lahir') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Tanggal Lahir</label>
                                        <input type="date" class="form-control <?= form_error('tgl_lahir') != null ? 'is-invalid' : ''; ?>" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $anggota['tgl_lahir']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tgl_lahir') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="custom-select">
                                            <?= $anggota['jenis_kelamin']; ?>
                                            <option <?php if ($anggota['jenis_kelamin'] == 'Laki-Laki') {
                                                        echo 'selected';
                                                    } else {
                                                        echo '';
                                                    } ?> value="Laki-Laki">Laki-Laki</option>
                                            <option <?php if ($anggota['jenis_kelamin'] == 'Perempuan') {
                                                        echo 'selected';
                                                    } else {
                                                        echo '';
                                                    } ?> value="Perempuan">Perempuan</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Pekerjaan</label>
                                        <input type="text" class="form-control <?= form_error('pekerjaan') != null ? 'is-invalid' : ''; ?>" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $anggota['pekerjaan']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('pekerjaan') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Alamat</label>
                                        <textarea class="form-control <?= form_error('alamat') != null ? 'is-invalid' : ''; ?>" name="alamat" id="alamat" placeholder="Alamat" rows="4"><?php echo $anggota['alamat']; ?>
                                        </textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">No Hp </label>
                                        <input type="number" class="form-control <?= form_error('no_hp') != null ? 'is-invalid' : ''; ?>" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $anggota['no_hp']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('no_hp') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label class="form-label">Status</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status" value="1" class="selectgroup-input" placeholder="" <?= $anggota['status'] == 1 ? 'checked' : ''; ?>>
                                                <span class="selectgroup-button">Aktif</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status" value="0" class="selectgroup-input" placeholder="" <?= $anggota['status'] == 0 ? 'checked' : ''; ?>>
                                                <span class="selectgroup-button">Tidak Aktif</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
    function DeskripsiStatus() {
        var x = document.getElementById("status");
        if (x.checked) {
            desc = "Aktif";
            document.getElementById("status").value = 1;
        } else {
            desc = "Tidak Aktif"
            document.getElementById("status").value = 0;
        }
        document.getElementById("deskripsi").innerHTML = desc;
    }
</script>