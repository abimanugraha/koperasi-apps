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
        <h2 style="margin-top:0px">Pembayaran Read</h2>
        <table class="table">
	    <tr><td>Id Pinjaman</td><td><?php echo $id_pinjaman; ?></td></tr>
	    <tr><td>Angsuran</td><td><?php echo $angsuran; ?></td></tr>
	    <tr><td>Cicilan</td><td><?php echo $cicilan; ?></td></tr>
	    <tr><td>Tgl Jatuh Tempo</td><td><?php echo $tgl_jatuh_tempo; ?></td></tr>
	    <tr><td>Tgl Bayar</td><td><?php echo $tgl_bayar; ?></td></tr>
	    <tr><td>Jumlah</td><td><?php echo $jumlah; ?></td></tr>
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Waktu Insert</td><td><?php echo $waktu_insert; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pembayaran') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>