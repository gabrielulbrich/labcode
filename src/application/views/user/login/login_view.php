<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>


		<!-- style login -->
		<link href="<?php echo base_url(); ?>assets/css/login/login.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>

<div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Sign in to continue</strong>
					</div>
					<div class="panel-body">
          <?= form_open('User/login') ?>
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
                </div>                                    
                <?php if (validation_errors()) : ?>
                  <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                      <?= validation_errors() ?>
                    </div>
                  </div>
                <?php endif; ?>
                <?php if (isset($error)) : ?>
                  <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                      <?= $error ?>
                    </div>
                  </div>
								<?php endif; ?>
								<?php if (isset($success)) : ?>
                  <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                      <?= $success ?>
                    </div>
                  </div>
                <?php endif; ?>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Password" name="password" type="password" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                    </div>
									</div>
								</div>
							</fieldset>
              <?= form_close() ?>
					</div>
					<div class="panel-footer ">
						Don't have an account! <a href="<?php echo base_url();?>register" onClick=""> Sign Up Here </a>
					</div>
          </div>
			</div>
		</div>
	</div>

</body>

</html>