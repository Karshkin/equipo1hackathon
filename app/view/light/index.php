<?php
$pageTitle = "Pokezine";
include_once("app/view/light/includes/header.php");
?>

			<div class = "roller">
				<div id="slider">
						<div class="slides">

						<?php
						if(isset($_GET["category"])) {
							switch($_GET["category"]) {
								case "humor":
									$recentNews = newsCategory("humor");
									break;
								case "actualidad":
									$recentNews = newsCategory("actualidad");
									break;
								case "tragicas":
									$recentNews = newsCategory("tragicas");
									break;
								default:
									$recentNews = recentNews();
									break;
							}
						}
						else {
							$recentNews = recentNews();
						}

						for($i = 0; $i < sizeof($recentNews["id"]); $i++) {
							echo '
							<div class="slider">
								<div class="legend"></div>
								<div class="content">
									<div class="content-txt">
									<h1>'.$recentNews["title"][$i].'</h1>
									<h2>'.$recentNews["subtitle"][$i].'</h2>
									</div>
								</div>
								<div class="image">
									<img src="'.$recentNews["photo"][$i].'">
								</div>
								<a href="?action=new&page=new&newid='.$recentNews["id"][$i].'"></a>
							</div>
							';
						}
						?>
						</div>
				</div>
			</div>

			<div class = "categories">
				<nav class = "menu">
					<ul>
						<li><a href="index.php?category=humor">Humor</a></li>
						<li><a href="index.php?category=actualidad">Actualidad</a></li>
						<li><a href="index.php?category=tragicas">Trágicas</a></li>
					</ul>
				</nav>
			</div>

			<div class = "news">
			<?php
			for($i = 0; $i < sizeof($recentNews["id"]); $i++) {
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

			?>
			</div>

			<div class = "loadMore">
				<a class = "" href="index.php">Mas Artículos</a>
			</div>

<?php
include_once("app/view/light/includes/footer.php");
?>