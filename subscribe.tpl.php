<!DOCTYPE html>
<html>
	<head>

		<title>Subscribe</title>

		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


	</head>

	<body>

		<div class="row" style="margin: 0;">

			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-info">

					<div class="panel-heading"><h3>Create an account</h3></div>

					<div class="panel-body">

						<form method="post" action="subscribe.html" role="form">

							<div class="form-group">

								<label for="name">Your name</label>

								<input type="text" name="name" id="name" placeholder="Your name" class="form-control" required>

							</div>

							<div class="form-group">

								<label for="email">Email</label>

								<input type="email" name="email" id="email" placeholder="Your email" class="form-control" required>

							</div>

							<div class="form-group">

								<label for="bio">Short bio</label>

								<textarea name="bio" id="bio" class="form-control" rows="8"></textarea>

							</div>

							<div class="form-group">

								<label for="password">Password</label>

								<input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>

							</div>

							<div class="form-group">

								<label for="confirm">Confirm password</label>

								<input type="password" name="confirm" id="confirm" placeholder="Confirm password" class="form-control" required>

							</div>

							<input type="submit" name="subscribe" value="Register" class="btn btn-info">

						</form> <!--END form-->

					</div> <!--END panel body-->

				</div> <!--END panel-->

			</div> <!--END col-->

		</div> <!--END row-->

	</body>

</html>