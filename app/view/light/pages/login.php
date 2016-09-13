<?php
$pageTitle = "Login";
include_once("app/view/default/includes/header.php");
?>

<div class = "loginRegisterForm">
	<form id = "loginForm" method = "post" action = "?action=login">
		<div class = "email"><input type = "email" name = "email" placeholder = "<?php echo $lang["loginFormEmailPH"]; ?>"></div>
		<div class = "password"><input type = "password" name = "password" placeholder = "<?php echo $lang["loginFormPasswordPH"]; ?>"></div>
		<div class="g-recaptcha" data-sitekey="6LeFvCUTAAAAAJ1tdHBXj2APWDGlgXOXb7GXSjMf"></div>
		<div class = "submit"><input type = "submit" value = "<?php echo $lang["loginFormSubmitBT"]; ?>"></div>
	</form>
</div>

<?php
include_once("app/view/default/includes/footer.php");
?>