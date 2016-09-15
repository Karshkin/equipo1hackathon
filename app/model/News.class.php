<?php

require_once("app/model/Database.class.php");

class News extends Database {

	public function __construct() {
		parent::__construct();
	}

	public function __destruct() {
		parent::__destruct();
	}

	public function getNews($id) {


		if($result = $this->query("SELECT n.idNew ,n.title, n.subtitle, n.description, n.date, n.photo, c.name, (SELECT ROUND ((SUM(nu.note_user)/COUNT(nu.news_idNew)), 0) as media
					FROM note_new_user nu, news n, user u
							WHERE n.idNew=nu.news_idNew AND u.idUser=nu.user_idUser AND n.idNew='".$id."') as 'Media'
									FROM news n, category c, news_has_category nc 
									WHERE c.idcategory=nc.category_idcategory AND nc.news_idNew=n.idNew AND n.idNew='".$id."';")) {
			$result = mysqli_fetch_object($result);
			return array($result->idNew, $result->title, $result->subtitle, $result->description, $result->date, $result->photo, $result->name);
		}
		else {
			return false;
		}
	}
}
?>