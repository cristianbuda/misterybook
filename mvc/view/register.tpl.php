<!DOCTYPE html>
<html>
	<head>
		<?php include "_head.tpl.php"; ?>
	</head>

	<body>
		<?php include "_header.tpl.php"; ?>


		<div class="row" style="margin: 0;">

			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-info">

					<div class="panel-heading"><h3>Create an account</h3></div>

					<div id="errors">



						<?php 
									
					
							if(isset($_SESSION['register_errors'])) {

								for($i = 0; $i < count($_SESSION['register_errors']); $i ++ ) { ?>

									<h3 class="bg-danger"><?php echo $_SESSION['register_errors'][$i]; ?></h3>

								<?php }

							}

						?>

					</div>

					<div class="panel-body">

						<form method="post" action="index.php?controller=register" role="form">

							<div class="form-group">

								<label for="name">Your name</label>

								<input type="text" name="name" id="name" placeholder="Your name" class="form-control" required value="<?php if(isset($_SESSION['name'])) {echo $_SESSION['name'];}?>">

							</div>

							<div class="form-group">

								<label for="email">Email</label>

								<input type="email" name="email" id="email" placeholder="Your email" class="form-control" required value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];}?>">

							</div>

							<div class="form-group">

								<label for="bio">Short bio</label>

								<textarea name="bio" id="bio" class="form-control" rows="8"><?php if(isset($_SESSION['bio'])) {echo $_SESSION['bio'];}?></textarea>

							</div>

							<div class="form-group">

								<label for="password">Password</label>

								<input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>

							</div>

							<div class="form-group">

								<label for="confirm">Confirm password</label>

								<input type="password" name="confirm" id="confirm" placeholder="Confirm password" class="form-control" required>

							</div>

							<input type="submit" name="register" value="Register" class="btn btn-info">

						</form> <!--END form-->

					</div> <!--END panel body-->

				</div> <!--END panel-->

			</div> <!--END col-->

		</div> <!--END row-->

		<?php include "_footer.tpl.php"; ?>   
	</body>
</html>
