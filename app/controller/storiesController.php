<?php
require_once("app/model/Story.class.php");

function insertStory() {
	$story= new Story();
	$story->newStory($_POST["storyTitle"], $_SESSION["userID"], $_POST["storyInit"], $decisions);
}

function deleteStory() {}

function getStory() {}

?>