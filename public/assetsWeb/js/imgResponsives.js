var container = document.querySelector('#bodyPost');
var imgResponsives = container.querySelectorAll('figure.image > img');
for (var i = 0; i<imgResponsives.length; i++) {
	imgResponsives[i].classList.toggle("img-fluid");
}