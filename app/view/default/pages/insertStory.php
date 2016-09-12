<?php
$pageTitle = "Register";
include_once("app/view/default/includes/header.php");
?>

<div class = "insertStoryForm">
	<form id = "insertStoryForm" method = "post" action = "?action=insertStory">
		<div><input type = "text" name = "storyTitle"></div>
		<div><textarea class = "textEdit" name = "storyInit"></textarea></div>
		<div><input type = "button" name = "insertDecision" value = "Enter a decision"></div>
	</form>
</div>


<?php
include_once("app/view/default/includes/footer.php");
?>