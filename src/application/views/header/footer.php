
<!-- /#wrapper -->
<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url(); ?>vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

<script src="<?php echo base_url(); ?>vendor/datatables/js/dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "/CadastroCliente/api"
        } );
    } );

    $(document).ready(function() {
        $('#listaform').DataTable();
    } );
</script>

</body>

</html>