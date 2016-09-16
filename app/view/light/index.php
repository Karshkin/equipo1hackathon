<?php
$pageTitle = "Inicio";
include_once("app/view/light/includes/header.php");
?>

			<div class = "roller">

				<div class = "item">
					<div class = "itemImage">
						<img id = "img" src="https://upload.wikimedia.org/wikipedia/en/3/39/Pokeball.PNG">
						<button type="button" onclick="displayPreviousImage()">Previous</button>
       					<button type="button" onclick="displayNextImage()">Next</button>
					</div>
					<div class = "itemDescription"></div>
				</div>

			</div>

			<div class = "categories">
				<nav class = "menu">
					<ul>
						<li><a href="index.php">Humor</a></li>
						<li><a href="index.php">Humor</a></li>
						<li><a href="index.php">Humor</a></li>
						<li><a href="index.php">Humor</a></li>
					</ul>
				</nav>
			</div>

			<div class = "news">

			<?php
			for($i = 0; $i < sizeof($recentNews["id"]); $i++) {
					echo '
					<a href="?action=new&page=new&newid='.$recentNews["id"][$i].'"><div class = "item">
						<div class = "itemImage">
							<img src='.$recentNews["photo"][$i].'>
						</div>
						<div class = "itemDescription">
							'.$recentNews["subtitle"][$i].'
						</div>
					</div></a>
					';
			}
			?>

			</div>

<?php
include_once("app/view/light/includes/footer.php");
?>