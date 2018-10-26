
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

                <div class="container">
                    <div class="row">
                        <h3>Pessoal</h3><hr>
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="Nome">Nome Completo</label>
                            <input name="nome" type="text" class="form-control" id="inputNome" placeholder="Nome completo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="inputAddress">Sexo</label><br>
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
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="CPF">CPF</label>
                            <input name="cpf" type="text" class="form-control" id="inputCPF" placeholder="CPF">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="Email">E-mail</label>
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <h3>Contato</h3><hr>
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="CEP">CEP</label>
                            <input name="cep" type="text" class="form-control" id="cep">
                            <a id="btn_consulta" class="btn btn-success">Consultar</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="Endereço">Endereço</label>
                            <input name="rua" type="text" class="form-control" id="rua">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="Numero">Numero</label>
                            <input name="numero" type="text" class="form-control" id="numero">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="Bairro">Bairro</label>
                            <input name="bairro" type="text" class="form-control" id="bairro">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="Cidade">Cidade</label>
                            <input name="cidade" type="text" class="form-control" id="cidade">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 offset-md-4">
                            <label for="Estado">Estado</label>
                            <input name="estado" type="text" class="form-control" id="estado">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            <?php echo form_close();?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>



