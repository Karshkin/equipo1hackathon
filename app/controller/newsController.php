<?php
require_once("app/model/News.class.php");

function getNews($id) {
	$news = new News();
	return $news->getNews($id);
}

function recentNews() {
	$news = new News();
	return $news->recentNews();
}

function newsCategory($category) {
	$news = new News();
	return $news->newsCategory($category);
}

?>