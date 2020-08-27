<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('pinjaman'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('pinjaman'); ?>">Pinjaman</a></div>
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Detail Pinjaman</h2>
            <?php echo $this->session->userdata('message'); ?>
            <div class="row mt-sm-4">
                <!-- Data Diri -->
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form action="<?= base_url('pinjaman/update/') . $pinjaman['id']; ?>" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Data pinjaman</h4>
                            </div>
                            <div class="card-body">
                                <!-- Hidden input -->
                                <div class="row">
                                    <input type="text" hidden name="id_user" value="<?= $usr['id']; ?>">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Anggota</label>
                                        <select name="id_anggota" class="custom-select <?= form_error('id_anggota') ? 'is-invalid' : ''; ?>">
                                            <?php foreach ($list_anggota as $a) { ?>
                                                <option <?= $pinjaman['id_anggota'] == $a->id ? 'selected' : ''; ?> value="<?= $a->id; ?>"><?= $a->nama; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('id_anggota') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Tanggal Peminjaman</label>
                                        <input type="date" class="custom-select <?= form_error('tgl_pinjam') ? 'is-invalid' : ''; ?>" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo $pinjaman['tgl_pinjam']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tgl_pinjam') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Jumlah</label>
                                        <input type="number" class="form-control <?= form_error('jumlah') ? 'is-invalid' : ''; ?>" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $pinjaman['jumlah']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jumlah') ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Durasi</label>
                                        <div class="input-group">
                                            <input type="number" name="durasi" class="form-control <?= form_error('durasi') ? 'is-invalid' : ''; ?>" placeholder="Durasi" value="<?php echo $pinjaman['durasi']; ?>">
                                            <select name="bulan" class="custom-select <?= form_error('durasi') ? 'is-invalid' : ''; ?>">
                                                <option <?= $pinjaman['bulan'] == '1' ? 'selected' : ''; ?> value='1'>Bulan</option>
                                                <option <?= $pinjaman['bulan'] == '12' ? 'selected' : ''; ?> value='12'>Tahun</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('durasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Bunga</label>
                                        <input type="text" class="form-control <?= form_error('bunga') ? 'is-invalid' : ''; ?>" name="bunga" id="bunga" placeholder="Bunga" value="<?php echo $pinjaman['bunga']; ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('bunga') ?>
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