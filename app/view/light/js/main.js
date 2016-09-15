function displayNextImage() {
  x = (x === images.length - 1) ? 0 : x + 1;
  document.getElementById("img").src = images[x];
}

function displayPreviousImage() {
  x = (x <= 0) ? images.length - 1 : x - 1;
  document.getElementById("img").src = images[x];
}

function startTimer() {
  setInterval(displayNextImage, 3000);
}

var images = [], x = -1;
images[0] = "https://upload.wikimedia.org/wikipedia/en/3/39/Pokeball.PNG";
images[1] = "http://www.ilsussidiario.net/img/_THUMBWEB/Pikachu_pokemon_wikipedia_thumb400x275.jpg";
images[2] = "https://i.ytimg.com/vi/BinkIiZBEFI/maxresdefault.jpg";