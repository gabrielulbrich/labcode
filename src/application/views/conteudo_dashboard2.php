
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Conteúdo</h1>

           <?php $sucess = $this->session->userdata('sucess'); ?>

            <?php if(isset($sucess)) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sucess; ?>
                </div>
            <?php endif; ?>


            <?php echo form_open_multipart('Welcome/alterarImg'); ?>

                <input type="file" name="foto" id="uploadimg" >
                <img id="img" style="width: 500px">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nome" value="" style="width: 500px;">
                <input type="submit" value="Enviar" />
            
            <?php echo form_close(); ?>



        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->



