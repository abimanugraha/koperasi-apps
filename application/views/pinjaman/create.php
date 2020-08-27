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
                <div class="breadcrumb-item">Create</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Create Pinjaman</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="<?= base_url('pinjaman/create_action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h4>Formulir pinjaman</h4>
                            </div>
                            <div class="card-body">
                                <!-- Hidden input -->
                                <div class="row">
                                    <input type="text" hidden name="id_user" value="<?= $usr['id']; ?>">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="int">Anggota</label>
                                        <select name="id_anggota" class="custom-select <?= form_error('id_anggota') ? 'is-invalid' : ''; ?>">
                                            <option selected value="">Pilih Anggota</option>
                                            <?php foreach ($list_anggota as $a) { ?>
                                                <option value="<?= $a->id; ?>"><?= $a->nama; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Tanggal Peminjaman</label>
                                        <input type="date" class="custom-select <?= form_error('tgl_pinjam') ? 'is-invalid' : ''; ?>" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo $input['tgl_pinjam']; ?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="varchar">Jumlah</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $input['jumlah']; ?>" />
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Durasi</label>
                                        <div class="input-group">
                                            <input type="number" name="durasi" class="form-control" placeholder="Durasi" value="<?php echo $input['durasi']; ?>">
                                            <select name="bulan" class="custom-select">
                                                <option selected value=1>Bulan</option>
                                                <option value=12>Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="varchar">Bunga</label>
                                        <input type="text" class="form-control" name="bunga" id="bunga" placeholder="Bunga" value="<?php echo $input['bunga']; ?>" />
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