<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Conteúdo</h1>

            <?php $sucess = $this->session->userdata('sucess'); ?>

            <?php if(isset($sucess)) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sucess; ?>
                </div>
            <?php endif; ?>


            <div class="container">
                <textarea id="summernote"></textarea>
            </div>

            <?php if (isset($_SESSION)) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php var_dump($_SESSION); ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		    <?php endif; ?>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>



