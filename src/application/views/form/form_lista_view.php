<?php
/**
 * Created by PhpStorm.
 * User: gulbrich
 * Date: 10/1/18
 * Time: 4:35 PM
 */
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Formulário</h1>

            <?php
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

                <table id="listaform" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Excluir Editar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php  if (count($dados) == 0): ?>
                            <tr><td colspan="2">Nenhum contato encontrado</td></tr>
                        <?php endif ?>
                            {dados}
                                <tr>
                                    <td>{idform}</td>
                                    <td>{nome}</td>
                                    <td>{email}</td>
                                    <td><button onclick="location.href='/Form/excluir/{idform}/'" type="button" class="btn btn-danger" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </button>

                                    <button onclick="location.href='/Form/editar/{idform}/'" type="button" class="btn btn-primary" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </button>
                                    </td>
                                </tr>
                            {/dados}
                    </tbody>
                </table>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

