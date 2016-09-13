<?php
//Theme
if(isset($_COOKIE["theme"])) {
	switch ($_COOKIE["theme"]) {
		case "dark":
			$theme = "dark";
			break;
		case "light":
			$theme = "light";
			break;
		default:
			$theme = "light";
			break;
	}
}
else {
	$theme = "light";
	setcookie("theme", $theme);
}

//Language
function checkLanguage($lang) {
	switch($lang) {
		case "es":
			$lang = "es";
			break;
		case "en":
			$lang = "en";
			break;
		default:
			$lang = "en";
			break;
	}
	return $lang;
}
if(isset($_COOKIE["lang"])) {
	$lang = checkLanguage($_COOKIE["lang"]);
}
else {
	$lang = checkLanguage(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
	setcookie("lang", $lang);
}
require_once("app/languages/".$lang.".php");
?>