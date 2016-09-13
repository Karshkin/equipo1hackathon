function newDecision() {
	/*var newDecision = document.createElement("div");
	newDecision.setAttribute("class", "decisionBox");
	var decisionTabs = document.createElement("ul");*/

	var decision = '<div class = "decisionBox" style="border: 1px;">' \
						'<ul class="decisionTabs">' \
							'<li><a href="#" onclick="openCity("London")">London</a></li>' \
							'<li><a href="#" onclick="openCity("Paris")">Paris</a></li>' \
							'<li><a href="#" onclick="openCity("Tokyo")">Tokyo</a></li>' \
							'<li><a href="#" onclick="openCity("Spain")">Spain</a></li>' \
						'</ul>';
	document.write(decision);

}

function selectDecision(decision) {
	var i;
	var x = document.getElementsByClassName("city");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	document.getElementById(decision).style.display = "block";
}

/*
		<div id="London" class="decision">
			<h2>London</h2>
			<textarea></textarea>
		</div>

		<div id="Paris" class="decision">
			<h2>Paris</h2>
			<textarea></textarea>
		</div>

		<div id="Tokyo" class="decision">
			<h2>Tokyo</h2>
			<textarea></textarea>
		</div>

		<div id="Spain" class="decision">
			<h2>Spain</h2>
			<textarea></textarea>
		</div>
	</div>*/