<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Anggota Koperasi Stisla</h2>
            <?php echo $this->session->userdata('message'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('anggota/create'); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-user-plus"></i> Tambah Anggota</a>
                            <h4 hidden>Daftar User</h4>
                            <div class="card-header-form">
                                <form action="#" onsubmit="cariTabel()">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" id="cari" oninput="cariTabel()" autofocus>
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table_id" width="100%" cellspacing="0">
                                    <?php $i = 1; ?>
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tgl Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Pekerjaan</th>
                                            <th>Status</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tgl Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Pekerjaan</th>
                                            <th>Status</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($anggota as $a) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $a['nik']; ?></td>
                                                <td><?= $a['nama']; ?></td>
                                                <td><?= $a['tempat_lahir']; ?>, <?= $a['tgl_lahir']; ?></td>
                                                <td><?= $a['jenis_kelamin']; ?></td>
                                                <td><?= $a['pekerjaan']; ?></td>
                                                <td>
                                                    <div class="badge badge-<?= ($a['status'] > 0 ? 'success' : 'warning');  ?>"><?= ($a['status'] > 0 ? 'Aktif' : 'Tidak Aktif');  ?></div>
                                                </td>
                                                <td align="center">
                                                    <a href="<?= base_url('anggota/read/') . $a["id"]; ?>" class="btn btn-info btn-icon-split btn-sm mr-3">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                    <a href="<?= base_url('user'); ?>" class="btn btn-sm btn-danger" data-confirm="Realy?|Do you want to continue?" data-confirm-yes='window.location.href = "<?= base_url("anggota/delete/") . $a["id"]; ?>"'> <span class="text">Hapus</span></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </section>
</div>

<script>
    function cariTabel() {
        var x = document.getElementById("cari").value;
        var table = $('#table_id').DataTable({
            retrieve: true,
            'dom': 'tp'
        });
        if (x) {
            table.search(x);
            table.draw();
        }
    }
</script>