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
        <h2 style="margin-top:0px">Pengambilan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Anggota <?php echo form_error('id_anggota') ?></label>
            <input type="text" class="form-control" name="id_anggota" id="id_anggota" placeholder="Id Anggota" value="<?php echo $id_anggota; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Ambil <?php echo form_error('tgl_ambil') ?></label>
            <input type="text" class="form-control" name="tgl_ambil" id="tgl_ambil" placeholder="Tgl Ambil" value="<?php echo $tgl_ambil; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Jenis <?php echo form_error('id_jenis') ?></label>
            <input type="text" class="form-control" name="id_jenis" id="id_jenis" placeholder="Id Jenis" value="<?php echo $id_jenis; ?>" />
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
	    <a href="<?php echo site_url('pengambilan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>