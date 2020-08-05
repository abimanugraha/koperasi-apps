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
        <h2 style="margin-top:0px">Pembayaran <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Pinjaman <?php echo form_error('id_pinjaman') ?></label>
            <input type="text" class="form-control" name="id_pinjaman" id="id_pinjaman" placeholder="Id Pinjaman" value="<?php echo $id_pinjaman; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">Angsuran <?php echo form_error('angsuran') ?></label>
            <input type="text" class="form-control" name="angsuran" id="angsuran" placeholder="Angsuran" value="<?php echo $angsuran; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Cicilan <?php echo form_error('cicilan') ?></label>
            <input type="text" class="form-control" name="cicilan" id="cicilan" placeholder="Cicilan" value="<?php echo $cicilan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Jatuh Tempo <?php echo form_error('tgl_jatuh_tempo') ?></label>
            <input type="text" class="form-control" name="tgl_jatuh_tempo" id="tgl_jatuh_tempo" placeholder="Tgl Jatuh Tempo" value="<?php echo $tgl_jatuh_tempo; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Bayar <?php echo form_error('tgl_bayar') ?></label>
            <input type="text" class="form-control" name="tgl_bayar" id="tgl_bayar" placeholder="Tgl Bayar" value="<?php echo $tgl_bayar; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id User <?php echo form_error('id_user') ?></label>
            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Waktu Insert <?php echo form_error('waktu_insert') ?></label>
            <input type="text" class="form-control" name="waktu_insert" id="waktu_insert" placeholder="Waktu Insert" value="<?php echo $waktu_insert; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pembayaran') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>