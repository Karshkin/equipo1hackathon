<?php
$pageTitle = "Register";
include_once("app/view/light/includes/header.php");
?>

<div class = "loginRegisterForm">
	<form id = "registerForm" method = "post" action = "?action=register">
		<div class = "username"><input type = "text" name = "username" placeholder = "<?php echo $lang["registerFormUsernamePH"]; ?>" required></div>
		<div class = "email"><input type = "email" name = "email" placeholder = "<?php echo $lang["registerFormEmailPH"]; ?>" required></div>
		<div class = "email"><input type = "email" name = "confirmEmail" placeholder = "<?php echo $lang["registerFormConfirmEmailPH"]; ?>" required></div>
		<div class = "password"><input type = "password" name = "password" placeholder = "<?php echo $lang["registerFormPasswordPH"]; ?>" required></div>
		<div class = "password"><input type = "password" name = "ConfirmPassword" placeholder = "<?php echo $lang["registerFormConfirmPasswordPH"]; ?>" required></div>
		<div class="g-recaptcha" data-sitekey="6LeFvCUTAAAAAJ1tdHBXj2APWDGlgXOXb7GXSjMf"></div>
		<div class = "submit"><input type = "submit" value = "<?php echo $lang["registerFormSubmitBT"]; ?>"></div>
	</form>
</div>

<?php
include_once("app/view/light/includes/footer.php");
?>