<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('jenis'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('jenis'); ?>">Jenis</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Buat Jenis Pinjaman</h2>
            <div class="row">
                <div class="col-12 col-md-10 col-lg-5">
                    <div class="card">
                        <form action="<?= base_url('jenis/create_action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Jenis Simpanan form</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="varchar">Jenis Simpanan</label>
                                        <input type="text" class="form-control <?= form_error('jenis') ? 'is-invalid' : 'is-valid'; ?>" name="jenis" id="jenis" placeholder="Jenis Simpanan" value="<?php echo $input['jenis']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenis') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="varchar">Keterangan </label>
                                        <textarea rows="4" type="text" class="form-control <?= form_error('keterangan') != null ? 'is-invalid' : 'is-valid'; ?>" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $input['keterangan']; ?></textarea>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('keterangan') ?>
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