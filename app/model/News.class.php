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
			return array("id" => $result->idNew, "title" => $result->title, "subtitle" => $result->subtitle, "description" => $result->description, "date" =>$result->date, "photo" => $result->photo, "category" => $result->name);
		}
		else {
			return false;
		}
	}

	public function recentNews() {
		if($result = $this->query("SELECT n.date, n.title, n.subtitle, n.photo, n.idNew
									FROM news n
									ORDER BY n.date DESC limit 6")) {
			while($row = mysqli_fetch_array($result)) {
				$date[] = $row["date"];
				$title[] = $row["title"];
				$subtitle[] = $row["subtitle"];
				$photo[] = $row["photo"];
				$id[] = $row["idNew"];
			}
			return array("date" => $date, "title" => $title, "subtitle" => $subtitle, "photo" => $photo, "id" => $id);
		}
		else {
			return false;
		}
	}

	public function newsCategory($category) {
		if($result = $this->query("SELECT n.date, n.title, n.subtitle, n.photo, n.idNew
									FROM news n, news_has_category nc, category c
									WHERE c.idcategory=nc.category_idcategory AND n.idNew=nc.news_idNew AND c.name like '".$category."'
									ORDER BY n.date DESC limit 6")) {
			while($row = mysqli_fetch_array($result)) {
				$date[] = $row["date"];
				$title[] = $row["title"];
				$subtitle[] = $row["subtitle"];
				$photo[] = $row["photo"];
				$id[] = $row["idNew"];
			}
			return array("date" => $date, "title" => $title, "subtitle" => $subtitle, "photo" => $photo, "id" => $id);
		}
		else {
			return false;
		}
	}
}
?>