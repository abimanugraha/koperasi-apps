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
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Simpanan</h2>
            <?php echo $this->session->userdata('message'); ?>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card">
                        <form action="<?= base_url('simpanan/update/') . $simpanan['id']; ?>" method="post" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Data Simpanan</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label for="varchar">Nama Anggota </label>
                                        <select disabled name="id_anggota" class="custom-select <?= form_error('id_anggota') ? 'is-invalid' : ''; ?>">
                                            <option value="">Pilih Anggota</option>
                                            <?php foreach ($list_anggota as $a) { ?>
                                                <option <?= $simpanan['id_anggota'] == $a->nama ? 'selected' : ''; ?> value="<?= $a->id; ?>"><?= $a->nama; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label for="varchar">Jenis Simpanan </label>
                                        <select name="id_jenis" class="custom-select <?= form_error('id_jenis') ? 'is-invalid' : ''; ?>">
                                            <?php foreach ($list_jenis as $j) { ?>
                                                <option <?= $simpanan['id_jenis'] == $j->jenis ? 'selected' : ''; ?> value="<?= $j->id; ?>"><?= $j->jenis; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class=" invalid-feedback">
                                            <?php echo form_error('id_jenis') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label for="varchar">Tanggal</label>
                                        <input type="date" class="custom-select <?= form_error('tgl_simpan') ? 'is-invalid' : ''; ?>" name="tgl_simpan" id="tgl_simpan" value="<?php echo $simpanan['tgl_simpan']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tgl_simpan') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label for="varchar">Jumlah</label>
                                        <input type="number" class="form-control <?= form_error('jumlah') ? 'is-invalid' : ''; ?>" name="jumlah" id="jumlah" value="<?php echo $simpanan['jumlah']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jumlah') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <div class="font-weight-600">Insert by <?= $simpanan['id_user']; ?> at <?= date("d F Y H:i", $simpanan['waktu_insert']); ?> WIB</div>
                            </div>
                            <!-- <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div> -->
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