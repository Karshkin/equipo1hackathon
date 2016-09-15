<?php
require_once("app/model/News.class.php");

function getNews($id) {
	$news = new News();
	return $news->getNews($id);
}

?>