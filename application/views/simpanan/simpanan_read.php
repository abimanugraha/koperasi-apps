<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Simpanan Read</h2>
        <table class="table">
	    <tr><td>Id</td><td><?php echo $id; ?></td></tr>
	    <tr><td>Id Anggota</td><td><?php echo $id_anggota; ?></td></tr>
	    <tr><td>Id Jenis</td><td><?php echo $id_jenis; ?></td></tr>
	    <tr><td>Tgl Simpan</td><td><?php echo $tgl_simpan; ?></td></tr>
	    <tr><td>Jumlah</td><td><?php echo $jumlah; ?></td></tr>
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Waktu Insert</td><td><?php echo $waktu_insert; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('simpanan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>