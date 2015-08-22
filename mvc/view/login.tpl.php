<!DOCTYPE html>
<html>
	<head>
		<?php include "_head.tpl.php"; ?>
	</head>

	<body>
		<?php include "_header.tpl.php"; ?>

		<?php if (!empty($login_errors)) : ?>

			<div class="errors">
				
				<?php foreach ($login_errors as $error_message) : ?>

					<p><?php echo $error_message; ?>

				<?php endforeach; ?>

			</div>

		<?php endif; ?>

		<fieldset style="width:30%">
			<legend>
				<p>
					<b>Login</b>
				</p>
			</legend>

			<form method="POST" action="index.php?controller=login"> 
				<input type="hidden" name="formname" value="sign-in">
				Mail<br><input type="text" name="mail" size="40"><br> 
				Password<br><input type="password" name="pass" size="40"><br> 
				<input id="button" type="submit" name="submit" value="Login"> 
			</form> 

		</fieldset> 

		<?php include "_footer.tpl.php"; ?>   
	</body>
</html>