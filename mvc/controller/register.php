<?php
	
	// $dbc = mysqli_connect('localhost', 'root', '', 'misterybook') or die(mysqli_error($dbc));
	// session_start();

	if(isset($_SESSION['register_errors'])) {
		unset($_SESSION['register_errors']);
	} 

	if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['bio'])) {
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['bio']);
	}

	if(isset($_POST['register'])) {

		$name = mysqli_real_escape_string($dbc, $_POST['name']);
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$bio = mysqli_real_escape_string($dbc, $_POST['bio']);
		$password = sha1(SHA1_SALT . $_POST['password']);
		$confirm = sha1(SHA1_SALT . $_POST['confirm']);

		if($email == false) {

			$_SESSION['register_errors'][] = "Email is not valid";

		} else {

			$q = "SELECT * FROM users WHERE email = '$email'";
			$r = mysqli_query($dbc, $q);

			if($user_exists = mysqli_fetch_assoc($r)) {

				$_SESSION['register_errors'][] = "Email already exists";

			}
		}

		if(($password != '') && ($confirm != '')) {

			if($password != $confirm) {

				$_SESSION['register_errors'][] = "Passwords don't match";
			}

		} else {

			$_SESSION['register_errors'][] = "Please complete password fields";

		}

		$q = "INSERT INTO users (name, email, bio, password) VALUES ('$name', '$email', '$bio', '$password')";

		if(!isset($_SESSION['register_errors'])) {

			$r = mysqli_query($dbc, $q);

			if($r) {

				header('Location: index.php?controller=login');
				
				break;

			} else {

				$_SESSION['register_errors'][] = "Sorry! There has been an error with the database: ".mysqli_error($dbc);
			}	

		} 

		$_SESSION['name'] = $name;
		$_SESSION['email'] = $email;
		$_SESSION['bio'] = $bio;
		header('Location: index.php?controller=register');

	}

?>