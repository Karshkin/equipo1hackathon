<?php
$pageTitle = $articleData["title"];
$newsTitle = $articleData["title"];
include_once("app/view/light/includes/header.php");

?>

<div class = "newsImage">
	<img src="<?php echo $articleData["photo"]; ?>">
	<div class = "newsDate"></div>
	<div class = "newsRating"></div>
</div>

<div class = "newsText">
	<?php echo $articleData["description"]; ?>
</div>

<div class = "related">
	<?php
	$recentNews = newsCategory($articleData["category"]);
	for($i = 0; $i < 3; $i++) {
		if($recentNews["id"][$i] != $_GET["newid"]) {
			echo '
					<figure class="article">
					<div class="image"><img src="'.$recentNews["photo"][$i].'" /></div>
					<figcaption>
						<div class="date"><span class="day">28</span><span class="month">Oct</span></div>
						<h3>'.$recentNews["title"][$i].'</h3>
					</figcaption>
					<a href="?action=new&page=new&newid='.$recentNews["id"][$i].'"></a>
					</figure>
					';
		}
	}
	?>
</div>
<?php
include_once("app/view/light/includes/footer.php");
?>