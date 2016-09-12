<?php
$userNav = '<a href="?page=login">'.$lang["login"].'</a>';
if(isset($_SESSION["username"])) {
	$userNav = '<a href="?page=profile">'.$_SESSION["username"].'</a>
					<ul>
						<li><a href="#">'.$lang["subElement1"].'</a></li>
						<li><a href="#">'.$lang["subElement2"].'</a></li>
						<li><a href="?action=logout">'.$lang["logout"].'</a></li>
					</ul>
				';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		if((isset($_GET["page"])) && ($_GET["page"] == "login" || $_GET["page"] == "register")) {
			echo '<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
		}
		?>
		<link rel="stylesheet" type="text/css" href="app/view/default/css/main.css">
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<nav class = "menu">
			<ul>
				<li><a href="index.php">App icon</a></li>
				<li<?php echo (false ? ' class = "activeTab"' : ""); ?>><a href="?page=insertStory"><?php echo $lang["element1"]; ?></a></li>
				<li<?php echo (false ? ' class = "activeTab"' : ""); ?>><a href="#"><?php echo $lang["element2"]; ?></a></li>
				<li<?php echo ' class = "userMenu'.((isset($_GET["page"])) && (($_GET["page"] == "login") || ($_GET["page"] == "profile")) ? ' activeTab"' : '"'); ?>><?php echo $userNav; ?><li>
			</ul>
		</nav>
		<div class = "pageContainer">