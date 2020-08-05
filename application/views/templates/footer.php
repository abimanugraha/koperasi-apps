<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; Koperasi Stisla <?= date('Y'); ?>
    </div>
    <div class="footer-right">
        Development
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url('node_modules/'); ?>cleave.js/dist/cleave.min.js"></script>
<script src="<?= base_url('node_modules/'); ?>cleave.js/dist/addons/cleave-phone.us.js"></script>
<script src="<?= base_url('node_modules/'); ?>jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="<?= base_url('node_modules/'); ?>bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url('node_modules/'); ?>bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url('node_modules/'); ?>bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url('node_modules/'); ?>select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url('node_modules/'); ?>selectric/public/jquery.selectric.min.js"></script>
<script src="<?= base_url('node_modules/'); ?>bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?= base_url('node_modules/'); ?>jquery-ui-dist/jquery-ui.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
<script src="<?= base_url('assets/'); ?>js/custom.js"></script>

<!-- Template DataTables -->
<script src="<?= base_url('assets/'); ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>datatables/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            retrieve: true,
            'dom': 'tp'
        });
    });
</script>

<!-- Page Specific JS File -->
<script src="<?= base_url('assets/'); ?>js/page/components-table.js"></script>

<!-- File Upload -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
</body>

</html>