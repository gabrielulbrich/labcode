        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Formulário</a>
            </li>
            <li class="breadcrumb-item active">Listar</li>
        </ol>
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


