var container = document.querySelector('#bodyPost');
var imgResponsives = container.querySelectorAll('figure.image > img');
for (var i = 0; i<imgResponsives.length; i++) {
	imgResponsives[i].classList.toggle("img-fluid");
}
var imgResponsivesNotFigures = container.querySelectorAll('div.textPost > p > img');
for (var i = 0; i<imgResponsivesNotFigures.length; i++) {
	imgResponsivesNotFigures[i].classList.toggle("img-fluid");
}