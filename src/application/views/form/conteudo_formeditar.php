
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Formulário</h1>


            <?php
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );

            echo form_open('Form/update');

            ?>

            {editar}
            <form  method="post">
                <div style="margin-left: 50px;">
                    <div class="form-group">
                        <label for="text">TOKEN</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" size="50" style="width: 500px;">
                    </div>

                    <input type="hidden" class="form-control" id="exampleInputEmail1" name="idform" value="{idform}" style="width: 500px;">

                    <div class="form-group">
                        <label for="text">NOME</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nome" value="{nome}" style="width: 500px;">
                    </div>

                    <div class="form-group">
                        <label for="text">SENHA</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="senha" value="{senha}" style="width: 500px;">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">EMAIL</label>
                        <input type="text" name="email" value="{email}"  class="form-control" id="exampleInputPassword1" placeholder="email" style="width: 500px;">
                    </div>

                    <div><input type="submit" value="Enviar" /></div>
                </div>
                <?php echo form_close(); ?>
            </form>
            {/editar}

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>


