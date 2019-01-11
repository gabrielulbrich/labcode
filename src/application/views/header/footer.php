    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script src="assets/js/demo/chart-area-demo.js"></script>



<!-- <script src="<?php echo base_url(); ?>vendor/datatables/js/jquery.dataTables.min.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<!-- <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script> -->

<!-- Metis Menu Plugin JavaScript -->
<!-- <script src="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script> -->

<!-- Morris Charts JavaScript -->
<!-- <script src="<?php echo base_url(); ?>vendor/raphael/raphael.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url(); ?>assets/data/morris-data.js"></script> -->

<!-- Custom Theme JavaScript -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
<script src="<?php echo base_url(); ?>vendor/datatables/js/dataTables.min.js"></script> -->

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<!-- script local -->
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>

  <script>
	$(function(){
                $("#btn_consulta").click(function(){
                    var cep = $('#cep').val();
                    if (cep == '') {
                        alert('Informe o CEP antes de continuar');
                        $('#cep').focus();
                        return false;
                    }
                    $('#btn_consulta').html ('Aguarde...');
                    $.post('/CadastroCliente/consulta',
                    {
                        cep : cep
                    }, 
                    function(dados){
                        $('#rua').val(dados.logradouro);
                        $('#bairro').val(dados.bairro);
                        $('#cidade').val(dados.localidade);
                        $('#estado').val(dados.uf);
                        $('#btn_consulta').html('Consultar');
                    }, 'json');
                });
            });                     
  </script>

</body>

</html>