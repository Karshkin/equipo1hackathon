<?php
require_once("app/model/User.class.php");

function userLogin() {
	if(!isset($_POST["g-recaptcha-response"]) || empty($_POST["g-recaptcha-response"])) {
		header('Location: index.php?error=invalidCaptcha');
	}
	elseif(!isset($_POST["email"]) || empty($_POST["email"])) {
		header('Location: index.php?error=invalidEmail');
	}
	elseif(!isset($_POST["password"]) || empty($_POST["password"])) {
		header('Location: index.php?error=invalidPassword');
	}
	else {
		$verifyCaptcha = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeFvCUTAAAAANkz_yu9sGl5gudejAEA9rhXMKYx&response=".$_POST["g-recaptcha-response"]."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
		if($verifyCaptcha["success"]) {
			$user = new User();
			if($user->login($_POST["email"], $_POST["password"])) {
				header('Location: index.php');
			}
			else {
				header('Location: index.php?page=login&error=badLogin');
			}
		}
	}
}

function userLogout() {
	session_destroy();
	header('Location: index.php');
}

function userRegister() {
	if(!isset($_POST["g-recaptcha-response"]) || empty($_POST["g-recaptcha-response"])) {
		header('Location: index.php?error=invalidCaptcha');
	}
	elseif(!isset($_POST["username"]) || empty($_POST["username"])) {
		header('Location: index.php?error=invalidUsername');
	}
	elseif(!isset($_POST["email"]) || empty($_POST["email"])) {
		header('Location: index.php?error=invalidEmail');
	}
	elseif(!isset($_POST["confirmEmail"]) || empty($_POST["confirmEmail"]) || ($_POST["confirmEmail"] != $_POST["email"])) {
		if($_POST["confirmEmail"] != $_POST["email"]) {
			header('Location: index.php?error=distinctEmails');
		}
		else {
			header('Location: index.php?error=invalidConfirmEmail');
		}
	}
	elseif(!isset($_POST["password"]) || empty($_POST["password"])) {
		header('Location: index.php?error=invalidPassword');
	}
	elseif(!isset($_POST["ConfirmPassword"]) || empty($_POST["ConfirmPassword"]) || ($_POST["ConfirmPassword"] != $_POST["password"])) {
		if($_POST["ConfirmPassword"] != $_POST["password"]) {
			header('Location: index.php?error=distinctPasswords');
		}
		else {
			header('Location: index.php?error=invalidConfirmPassword');
		}
	}
	else {
		$verifyCaptcha = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeFvCUTAAAAANkz_yu9sGl5gudejAEA9rhXMKYx&response=".$_POST["g-recaptcha-response"]."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
		if($verifyCaptcha["success"]) {
			$user = new User();
			if($activationCode = $user->register($_POST["username"], $_POST["email"], $_POST["password"])) {
				//$registrationCompleteMSG = "Registrado, activa tu cuenta haciendo click en este enlace: ".$_POST["email"];
				//mail($_POST["email"], "Activate your account", $registrationCompleteMSG);

				header('Location: index.php?notif=registerSuccess');
			}
			else {
				header('Location: index.php?error=badRegister');
			}
		}
	}
}

function userActivate() {
	$user = new User();
	$user->activateUser($_GET["activationCode"], $_GET["userID"]);
}

function getProfileData($userID) {
	//Llama a la funcion getUserData() del User.class.php para sacar la información del usuario que le hemos pasado a esta funcion por ID.
	$userData = "Datos Usuario";
	return $userData;
}

?>