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
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Create Anggota</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="<?= base_url('anggota/create_action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Formulir anggota</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="int">Username</label>
                                        <input type="text" class="form-control <?= form_error('user_id') ? 'is-invalid' : 'is-valid'; ?>" name="user_id" id="user_id" placeholder="Username" value="<?php echo $input['user_id']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('user_id') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Nama</label>
                                        <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : 'is-valid'; ?>" name="nama" id="nama" placeholder="Nama" value="<?php echo $input['nama']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama') ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Nik</label>
                                        <input type="number" maxlength="16" class="form-control <?= form_error('nik') ? 'is-invalid' : 'is-valid'; ?>" name="nik" id="nik" placeholder="Nik" value="<?php echo $input['nik']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nik') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Tempat Lahir</label>
                                        <input type="text" class="form-control <?= form_error('tempat_lahir') ? 'is-invalid' : 'is-valid'; ?>" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $input['tempat_lahir']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tempat_lahir') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Tanggal Lahir</label>
                                        <input type="date" class="custom-select <?= form_error('tgl_lahir') ? 'is-invalid' : 'is-valid'; ?>" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $input['tgl_lahir']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tgl_lahir') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="custom-select <?= form_error('jenis_kelamin') != null ? 'is-invalid' : 'is-valid'; ?>">
                                            <?= $input['jenis_kelamin']; ?>
                                            <option <?php if ($input['jenis_kelamin'] == 'Laki-Laki') {
                                                        echo 'selected';
                                                    } else {
                                                        echo '';
                                                    } ?> value="Laki-Laki">Laki-Laki</option>
                                            <option <?php if ($input['jenis_kelamin'] == 'Perempuan') {
                                                        echo 'selected';
                                                    } else {
                                                        echo '';
                                                    } ?> value="Perempuan">Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenis_kelamin') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Pekerjaan</label>
                                        <input type="text" class="form-control <?= form_error('pekerjaan') ? 'is-invalid' : 'is-valid'; ?>" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $input['pekerjaan']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('pekerjaan') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Alamat</label>
                                        <textarea class="custom-select <?= form_error('alamat') ? 'is-invalid' : 'is-valid'; ?>" name="alamat" id="alamat" placeholder="Alamat" rows="4"><?php echo $input['alamat']; ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="char">No Hp</label>
                                        <input type="number" class="form-control <?= form_error('no_hp') ? 'is-invalid' : 'is-valid'; ?>" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $input['no_hp']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('no_hp') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label class="form-label">Status</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status" value="1" class="selectgroup-input" checked="" placeholder="">
                                                <span class="selectgroup-button">Aktif</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status" value="0" class="selectgroup-input" placeholder="">
                                                <span class="selectgroup-button">Tidak Aktif</span>
                                            </label>
                                        </div>
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