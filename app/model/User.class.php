<?php

require_once("app/model/Database.class.php");

class User extends Database {

	public function __construct() {
		parent::__construct();
	}

	public function __destruct() {
		parent::__destruct();
	}

	public function login($email, $password) {
		$email = mysqli_real_escape_string($this->conexion, $email);
		$password = md5($password);

		if($result = $this->query("SELECT idUser, user_name FROM user WHERE email='".$email."' and password='".$password."';") && !is_null($result)) {
			$result = mysqli_fetch_object($result);
			$_SESSION["username"] = $result->user_name;
			$_SESSION["userID"] = $result->idUser;
			return true;
		}
		else {
			return false;
		}
	}

	public function register($username, $email, $password) {
		$username = mysqli_real_escape_string($this->conexion, $username);
		$email = mysqli_real_escape_string($this->conexion, $email);
		$password = md5($password);
		$activationCode = md5($username.rand(0, 100));

		if($this->query("INSERT INTO user(user_name, email, password) VALUES('".$username."', '".$email."', '".$password."');")) {
			$newUserId = mysqli_insert_id($this->conexion);
		}
		else {
			return false;
		}
	}

	/*
	public function activateUser($activationCode, $userID) {
		if(mysqli_num_rows($this->query("SELECT userId, activeCode FROM user_emailconfirm WHERE userId='".$userID."' and activeCode='".$activationCode."';")) == 1) {
				if($this->query("UPDATE user_emailconfirm SET confirmed=1 WHERE userId='".$userID."' and activeCode='".$activationCode."';")) {
					return true;
				}
		}
		else {
			return false;
		}
	}
	*/
}

?>