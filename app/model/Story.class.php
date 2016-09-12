<?php
require_once("app/model/Database.class.php");

class Story extends Database {

	public function __construct() {
		parent::__construct();
	}

	public function __destruct() {
		parent::__destruct();
	}

	public function newStory($storyName, $storyAuthor, $storyInit, $storyDecisions) {
		$storyName = mysqli_real_escape_string($this->conexion, $storyName);
		$storyAuthor = mysqli_real_escape_string($this->conexion, $storyAuthor);
		$storyInit = mysqli_real_escape_string($this->conexion, $storyInit);

		if($this->query("INSERT INTO stories(storyName, storyAuthor, storyInit) VALUES('".$storyName."', '".$storyAuthor."', '".$storyInit."');")) {
			$newStoryId = mysqli_insert_id($this->conexion);
			for($i = 0; $i < sizeof($storyDecisions[0]); $i++) {
				$this->query("INSERT INTO decisions(storyId, decisionNum, decisionName, decision) VALUES('".$newStoryId."', '".($i+1)."', '".$storyDecisions[0][$i]."', '".$storyDecisions[1][$i]."');");
			}
		}
		else {
			return false;
		}
	}
}

?>