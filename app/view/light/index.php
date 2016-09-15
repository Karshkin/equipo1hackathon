<?php
$pageTitle = "Inicio";
include_once("app/view/light/includes/header.php");
?>

			<div class = "roller">

				<div class = "item" style = "display: none;">
					
					
				</div>

				<div class = "item" style = "display: none;">
					
					
				</div>

				<div class = "item">
					<div class = "itemImage">
						<img id = "img" src="https://upload.wikimedia.org/wikipedia/en/3/39/Pokeball.PNG">
						<button type="button" onclick="displayPreviousImage()">Previous</button>
       					<button type="button" onclick="displayNextImage()">Next</button>
					</div>
					<div class = "itemDescription">
						sdghsdf
					</div>
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

				<div class = "item">
					<div class = "itemImage">
						<img src="https://upload.wikimedia.org/wikipedia/en/3/39/Pokeball.PNG">
					</div>
					<div class = "itemDescription">
						Descripcion
					</div>
				</div>

				<div class = "item">
					<div class = "itemImage">
						<img src="https://upload.wikimedia.org/wikipedia/en/3/39/Pokeball.PNG">
					</div>
					<div class = "itemDescription">
						Descripcion
					</div>
				</div>

				<div class = "item">
					<div class = "itemImage">
						<img src="https://upload.wikimedia.org/wikipedia/en/3/39/Pokeball.PNG">
					</div>
					<div class = "itemDescription">
						Descripcion
					</div>
				</div>
			</div>

<?php
include_once("app/view/light/includes/footer.php");
?>