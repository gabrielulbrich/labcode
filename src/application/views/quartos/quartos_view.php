          <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>

  <div class="row" style="margin-left:0px">
    <?php echo form_open('Quartos/novoQuarto'); ?>
      <button type="submit" id="addQuarto" class="btn btn-success">+</button>
    <?php echo form_close(); ?>
  </div> 
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

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col"></th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($quartos as $q) { ?>
    <tr>
      <th><?php echo $q->idquarto ?></th>
      <td><?php echo $q->nome ?></td>
      <td></td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="popularModal(<?php echo $q->idquarto ?>)">Info</button></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" method="post" action="<?= base_url('Quartos/editarQuarto')?>" id="formulario_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome do quarto:</label>
            <input value="" type="text" class="form-control" id="nomeQuarto">
            <input type="hidden" name="idquarto" id="idQuarto" value="" />
          </div>
        </form>
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-primary" onclick="$('#formulario_modal').submit()">Alterar</button>
        <button type="button" class="btn btn-danger" onclick="excluirQuarto()" data-dismiss="modal">Excluir</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>

<script>
function popularModal(id)
{
  console.log(id);
    var cod_item = id;

    $.ajax({
        url: "/Quartos/popular_modal",
        type: "POST",
        data: {cod_item: cod_item},
        dataType: "html",
        success: function (result) {
            $(".form-group input").empty(); //limpa os inputs do formulário
            var data = jQuery.parseJSON(result);
            if (data.status == true) {
              $("#nomeQuarto").val(data.quarto);  
              $("#idQuarto").val(data.idquarto);                         
            } else {
                alert('Erro ao processar')
            }
        }
    });
}

function excluirQuarto()
{
  var idquarto = $('#idQuarto').val();
  var nomequarto = $('#nomeQuarto').val();
  console.log(nomequarto);

  $.post('/Quartos/excluirQuarto/'+idquarto+'/'+nomequarto,
        {
          idquarto : idquarto,
          nomequarto : nomequarto
        });
  location.reload();
}
</script>