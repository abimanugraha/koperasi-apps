<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Users</h2>
            <?php echo $this->session->userdata('message'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('user/create'); ?>" class="btn btn-icon icon-left btn-primary"><i class="fas fa-user-plus"></i> Tambah User</a>
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
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($user as $u) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $u['username']; ?></td>
                                                <td><?= $u['password']; ?></td>
                                                <td><?= $u['email']; ?></td>
                                                <td><?php if ($u['level'] == 0) {
                                                        echo "Administrator";
                                                    } elseif ($u['level'] == 1) {
                                                        echo "Operator";
                                                    } else {
                                                        echo "Anggota";
                                                    } ?></td>
                                                <td>
                                                    <img alt="image" src="<?= base_url('assets/img/uploads/') . $u['foto']; ?>" class="rounded-circle" width="48" data-toggle="tooltip" title="Wildan Ahdian">
                                                </td>
                                                <td>
                                                    <div class="badge badge-<?= ($u['status'] > 0 ? 'success' : 'warning');  ?>"><?= ($u['status'] > 0 ? 'Aktif' : 'Tidak Aktif');  ?></div>
                                                </td>
                                                <td align="center">
                                                    <a href="<?= base_url('user/read/') . $u["id"]; ?>" class="btn btn-info btn-icon-split btn-sm mr-3">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                    <a href="<?= base_url('user'); ?>" class="btn btn-sm btn-danger" data-confirm="Realy?|Do you want to continue?" data-confirm-yes='window.location.href = "<?= base_url("user/delete/") . $u["id"]; ?>"'> <span class="text">Hapus</span></a>
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