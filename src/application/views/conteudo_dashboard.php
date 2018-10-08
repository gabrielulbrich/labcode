
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Conteúdo</h1>


            <div>
                <a class="btn btn-primary" href="#" role="button">BTN1</a>
                <a class="btn btn-primary" href="#" role="button">BTN2</a>
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
<!-- /#page-wrapper -->



