          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

            <!-- <?php //$sucess = $this->session->userdata('sucess'); ?>

            <?php //if(isset($sucess)) : ?>
                <div class="alert alert-success" role="alert">
                    <?php //echo $sucess; ?>
                </div>
            <?php //endif; ?>


            <div class="container">
                <textarea id="summernote"></textarea>
            </div>

            <?php //if (isset($_SESSION)) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php //var_dump($_SESSION); ?>
					</div>
				</div> .row -->
			<!-- </div> -->
		    <?php //endif; ?>


        <div class="card-columns">
            <?php foreach($quartos as $q) { ?>
            <div class="card border-dark mb-3" style="max-width: 18rem; margin: 0 10px 0 10px;">
                <div class="card-header"><?php echo $q->nome; ?>
                </div>
                <div class="card-body text-dark">
                    <p class="card-text" style="line-height: 1;">Disponível</p>
                    <p class="card-text" style="font-size:10px; line-height: 0px;">08/02/2019 - 09/02/2018</p>
                    <div style="background-color: #f2f2f2; padding: 3px;">
                            <a class="icones" href="#">
                                <i class="fas fa-money-bill-alt"></i>
                            </a>
                            <a class="icones" href="#"> 
                                <i class="fas fa-user"></i>
                            </a>
                            <a class="icones" href="#">
                                <i class="fas fa-broom"></i>
                            </a>
                            <a class="icones" href="#">
                                <i class="fas fa-check-circle"></i>
                            </a>                            
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>