<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('user'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('user'); ?>">Users</a></div>
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Create User</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="<?= base_url('user/create_action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>User form</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Username </label>
                                        <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" value="<?php echo $input['username']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Password </label>
                                        <input type="password" class="form-control <?= form_error('password') != null ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Password">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Email </label>
                                        <input type="text" class="form-control <?= form_error('email') != null ? 'is-invalid' : ''; ?>" name="email" id="email" placeholder="Email" value="<?php echo $input['email']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Level</label>
                                        <select name="level" class="custom-select <?= form_error('level') != null ? 'is-invalid' : ''; ?>">
                                            <option value="0">Administrator</option>
                                            <option value="1">Operator</option>
                                            <option value="2" selected>Anggota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Foto</label>
                                        <div class="custom-file">
                                            <input name="foto" type="file" class="custom-file-input <?= form_error('foto') != null ? 'is-invalid' : ''; ?>" id="customFile" value="1">
                                            <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
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