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

                <table id="dataTable" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Excluir</th>
                            <th>Editar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php  if (count($dados) == 0): ?>
                            <tr><td colspan="2">Nenhum contato encontrado</td></tr>
                        <?php endif ?>
                            <?php foreach($dados as $dado) {?>
                                <tr>
                                    <td class=".col-md-1"><?= $dado->idform ?></td>
                                    <td><?= $dado->nome ?></td>
                                    <td><?= $dado->email ?></td>
                                    <td><a href="/Form/excluir/<?php echo $dado->idform ?>/">
                                            <button type="button" class="btn btn-danger" aria-label="Left Align">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/Form/editar/<?php echo $dado->idform ?>/">
                                            <button type="button" class="btn btn-primary" aria-label="Left Align">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>


