        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Formulário</a>
            </li>
            <li class="breadcrumb-item active">Cadastrar</li>
        </ol>
            <?php
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );

            echo form_open('Form/inserir');

            $erro = $this->session->userdata('erro');
            $sucess = $this->session->userdata('sucess');

            ?>

            <?php if(isset($erro)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $erro['msg']; ?>
            </div>
            <?php endif; ?>

            <?php if(isset($sucess)) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sucess; ?>
                </div>
            <?php endif; ?>

            <form  method="post">
                <div style="margin-left: 50px;">
                    <div class="form-group">
                        <label for="text">TOKEN</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" size="50" style="width: 500px;">
                    </div>

                    <div class="form-group">
                        <label for="text">NOME</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nome" value="" style="width: 500px;">
                    </div>

                    <div class="form-group">
                        <label for="text">SENHA</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="senha" value="" style="width: 500px;">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">EMAIL</label>
                        <input type="text" name="email" value=""  class="form-control" id="exampleInputPassword1" placeholder="email" style="width: 500px;">
                    </div>
                    <div><input type="submit" value="Enviar" /></div>
                </div>
                <?php echo form_close(); ?>
            </form>



