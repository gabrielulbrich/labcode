
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cadastro de Cliente</h1>


            <?php
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );

            echo form_open('CadastroCliente/cadastro');

            $erro = $this->session->userdata('error');
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

            <?php if (validation_errors()) : ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                </div>
            <?php endif; ?>


                <div class="form-group col-md-6">
                    <label for="Nome">Nome Completo</label>
                    <input name="nome" type="text" class="form-control" id="inputNome" placeholder="Nome completo">
                </div>


                <div style="margin-top: 38px;" class="form-group col-md-6">
                    <label for="inputAddress">Sexo</label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="inlineRadio1" value="Masculino"> Masculino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="inlineRadio2" value="Feminino"> Feminino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexo" id="inlineRadio3" value="Outro"> Outro
                    </label>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="CPF">CPF</label>
                        <input name="cpf" type="text" class="form-control" id="inputCPF" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Email">E-mail</label>
                        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group col-lg-8">
                    <label for="Endereço">Endereço</label>
                    <input name="endereco" type="text" class="form-control" id="inputEndereco" placeholder="Ex: Rua xyz">
                </div>
                <div class="form-group col-lg-4">
                    <label for="Numero">Número</label>
                    <input name="numero" type="text" class="form-control" id="inputNumero" placeholder="Ex: 123">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Cidade">Cidade</label>
                        <input name="cidade" type="text" class="form-control" id="inputCidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Estado">Estado</label>
                        <select name="estado" id="inputState" class="form-control">
                            <option selected>PR</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="CEP">CEP</label>
                        <input name="cep" type="text" class="form-control" id="inputCEP">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>

            <?php echo form_close();?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>


