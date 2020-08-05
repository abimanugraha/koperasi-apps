<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('user'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="<?= base_url('assets/img/avatar/avatar-1.png'); ?>" class="rounded-circle profile-widget-picture" />
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Level</div>
                                    <div class="profile-widget-item-value">Anggota</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Status</div>
                                    <div class="profile-widget-item-value text-success">Aktif</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <h6 class="text-primary mb-4">Profile Account</h6>

                            <form action="<?= base_url('user/update/') . $user['id']; ?>" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Username </label>
                                        <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" value="<?php echo $user['username']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Password </label>
                                        <input type="password" class="form-control <?= form_error('password') != null ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Password" value="<?php echo $user['password']; ?>">
                                        <div class=" invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label for="varchar">Email </label>
                                        <input type="text" class="form-control <?= form_error('email') != null ? 'is-invalid' : ''; ?>" name="email" id="email" placeholder="Email" value="<?php echo $user['email']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label>Level</label>
                                        <select name="level" class="custom-select <?= form_error('level') != null ? 'is-invalid' : ''; ?>">
                                            <option value="0" <?php if ($user['level'] == 0) echo "selected"; ?>>Administrator</option>
                                            <option value="1" <?php if ($user['level'] == 1) echo "selected"; ?>>Operator</option>
                                            <option value="2" <?php if ($user['level'] == 2) echo "selected"; ?>>Anggota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-8 col-12">
                                        <label>Foto</label>
                                        <div class="custom-file">
                                            <input name="foto" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile"><?= $user['foto']; ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label class="form-label">Status</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status" value="1" class="selectgroup-input" placeholder="" <?= $user['email'] == 1 ? 'checked' : ''; ?>>
                                                <span class="selectgroup-button">Aktif</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="status" value="0" class="selectgroup-input" placeholder="" <?= $user['email'] == 0 ? 'checked' : ''; ?>>
                                                <span class="selectgroup-button">Tidak Aktif</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer text-right">
                            <div class="font-weight-bold mb-2"><button class="btn btn-primary">Save Changes</button></div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">

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