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

<div class = "related"></div>
<?php
include_once("app/view/light/includes/footer.php");
?>