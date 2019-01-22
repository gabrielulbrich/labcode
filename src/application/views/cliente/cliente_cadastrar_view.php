<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Cliente</a>
    </li>
    <li class="breadcrumb-item active">Cadastrar</li>
</ol>

<?php
    $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
    );
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




<?php echo form_open('CadastroCliente/cadastro'); ?>
<div class="row paddingBottom20">
    <div class="container col-4">
        <div class="row">
            <h6 class="text-center col-12 mb-0">Cadastrar Cliente</h6>
            <sub class="text-right text-muted col-12"><a href="#" tabindex="-1"><i class="far fa-edit"></i></a></sub>
        </div>
        <div class="dropdown-divider mb-3"></div>

        <div class="form-group row align-items-center">
            <label for="firstName" class="col-4 col-form-label-sm text-right">Nome Completo:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="firstName" name="nome" type="text" class="form-control form-control-sm" readonly>
                </div>
            </div>
        </div>
        
        <div class="form-group row align-items-center">
            <label for="lastName" class="col-4 col-form-label-sm text-right">CPF:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="lastName" name="cpf" type="text" class="form-control form-control-sm" readonly>
                </div>
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="lastName" class="col-4 col-form-label-sm text-right">Sexo:</label>
            <div class="col-8">
                <div class="input-group">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio"><label class="col-form-label-sm">Masculino</label>
                    </label>
                    </div>
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio"><label class="col-form-label-sm">Feminino</label>
                    </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="form-group row align-items-center">
                        <label for="position" class="col-4 col-form-label-sm text-right">Position:</label> 
                        <div class="col-8">
                          <div class="input-group"> 
                            <select id="position" class="form-control" disabled>
                                <option></option>
                                <option>Shift Supervisor</option>
                                <option>Airport Manager</option>
                                <option>District Manager</option>
                                <option>Regional Manager</option>
                                <option>Terrirory Performance Manager</option>
                                <option>Ops. Manage</option>
                                <option>Other</option>
                            </select>
                          </div>
                        </div>
                    </div> -->
        <div class="form-group row align-items-center">
            <label for="emailAddress" class="col-4 col-form-label-sm text-right">Email Address:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="emailAddress" name="email" type="email" class="form-control form-control-sm extendable">
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="emailAddress" class="col-4 col-form-label-sm text-right">CEP:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="emailAddress" name="cep" type="email" class="form-control form-control-sm extendable">
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="office" class="col-4 col-form-label-sm text-right">Endereço:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="office" name="rua" type="number" class="form-control form-control-sm" readonly>
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="cell" class="col-4 col-form-label-sm text-right">Número:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="cell" name="numero" type="number" class="form-control form-control-sm" readonly>
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="emailAddress" class="col-4 col-form-label-sm text-right">Bairro:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="emailAddress" name="email" type="email" class="form-control form-control-sm extendable">
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="emailAddress" class="col-4 col-form-label-sm text-right">Cidade:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="emailAddress" name="cidade" type="email" class="form-control form-control-sm extendable">
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="emailAddress" class="col-4 col-form-label-sm text-right">Estado:</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="emailAddress" name="estado" type="email" class="form-control form-control-sm extendable">
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>



</div>