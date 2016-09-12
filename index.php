<?php
session_start();
define("APP_NAME", "FlatPHP");
require_once("app/controller/mainController.php");
require_once("app/controller/usersController.php");

if(!empty($_GET)) {
	if(isset($_GET["action"])) {
		switch($_GET["action"]) {
			case "login":
				userLogin();
				break;
			case "register":
				userRegister();
				break;
			case "logout":
				userLogout();
				break;
			default:
				//
				break;
		}
	}

	if(isset($_GET["page"])) {
		switch($_GET["page"]) {
			case "login":
				include_once("app/view/".$theme."/pages/login.php");
				break;
			case "register":
				include_once("app/view/".$theme."/pages/register.php");
				break;
			default:
				include_once("app/view/".$theme."/pages/404.php");
				break;
		}
	}
	else {
		include_once("app/view/".$theme."/index.php");
	}
}
else {
	include_once("app/view/".$theme."/index.php");
}

?>