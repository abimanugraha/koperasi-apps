<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('simpanan'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('simpanan'); ?>">Simpanan</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Simpanan</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="card">
                        <form action="<?= base_url('simpanan/create_action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Form simpanan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <input type="text" hidden name="id_user" value="<?= $usr['id']; ?>">
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="varchar">Anggota</label>
                                        <select name="id_anggota" class="custom-select <?= form_error('id_anggota') ? 'is-invalid' : ''; ?>">
                                            <option selected value="">Pilih Anggota</option>
                                            <?php foreach ($list_anggota as $a) { ?>
                                                <option value="<?= $a->id; ?>"><?= $a->nama; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('id_anggota') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="varchar">Jenis Simpanan</label>
                                        <select name="id_jenis" class="custom-select <?= form_error('id_jenis') ? 'is-invalid' : ''; ?>">
                                            <option selected value="">Pilih Jenis Simpanan</option>
                                            <?php foreach ($list_jenis as $j) { ?>
                                                <option value="<?= $j->id; ?>"><?= $j->jenis; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('id_jenis') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="varchar">Tanggal</label>
                                        <input type="date" class="custom-select <?= form_error('tgl_simpan') ? 'is-invalid' : ''; ?>" name="tgl_simpan" id="tgl_simpan" value="<?php echo $input['tgl_simpan']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tgl_simpan') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="varchar">Jumlah</label>
                                        <input type="number" class="form-control <?= form_error('jumlah') ? 'is-invalid' : ''; ?>" name="jumlah" id="jumlah" value="<?php echo $input['jumlah']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jumlah') ?>
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