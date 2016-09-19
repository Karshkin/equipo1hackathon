<?php
$pageTitle = "Inicio";
include_once("app/view/light/includes/header.php");
?>

			<div class = "roller">
				<img class="sliderImgs" src="http://www.hitentertainment.com/corporate/images/brands/pingu.jpg"></img>
				<img class="sliderImgs" src="http://www.hitentertainment.com/corporate/images/brands/pingu.jpg"></img>
				<img class="sliderImgs" src="http://cdn01.ib.infobae.com/adjuntos/162/imagenes/014/014/0014014674.jpg"></img>
				<img class="sliderImgs" src="http://www.hitentertainment.com/corporate/images/brands/pingu.jpg"></img>
				<img class="sliderImgs" src="http://cdn01.ib.infobae.com/adjuntos/162/imagenes/014/014/0014014674.jpg"></img>
				<img class="sliderImgs" src="http://www.hitentertainment.com/corporate/images/brands/pingu.jpg"></img>
				<img class="sliderImgs" src="http://cdn01.ib.infobae.com/adjuntos/162/imagenes/014/014/0014014674.jpg"></img>
			</div>

			<script type="text/javascript">
				var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("sliderImgs");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}
	    x[myIndex-1].style.display = "block";
	    setTimeout(carousel, 4000);//segundos 
	}
			</script>

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

<?php
include_once("app/view/light/includes/footer.php");
?>