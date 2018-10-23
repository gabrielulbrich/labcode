
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Perfil do usuário</h1>


            <?php
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );

            echo form_open_multipart('User/editUser');

            $erro = $this->session->userdata('error');
            $sucess = $this->session->userdata('sucess');

            ?>
            <?php if(isset($erro)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $erro; ?>
                </div>
            <?php endif; ?>

            <?php if(isset($sucess)) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sucess; ?>
                </div>
            <?php endif; ?>

            <?php if (validation_errors()) : ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                </div>
            <?php endif; ?>

            <input type="file" name="foto" id="uploadimg" >
            <img id="img" style="width: 500px">
            <button type="submit" class="btn btn-primary">Sign in</button>

            <?php echo form_close();?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>


