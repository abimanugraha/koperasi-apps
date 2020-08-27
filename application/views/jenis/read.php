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
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Jenis Pinjaman</h2>
            <?php echo $this->session->userdata('message'); ?>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card">
                        <form action="<?= base_url('jenis/update/') . $jenis['id']; ?>" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Edit Jenis Simpanan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label for="varchar">Jenis </label>
                                        <input type="text" class="form-control <?= form_error('jenis') ? 'is-invalid' : ''; ?>" name="jenis" id="jenis" placeholder="Jenis" value="<?php echo $jenis['jenis']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenis') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label for="varchar">Keterangan </label>
                                        <input type="text" class="form-control <?= form_error('keterangan') != null ? 'is-invalid' : ''; ?>" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $jenis['keterangan']; ?>">
                                        <div class=" invalid-feedback">
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