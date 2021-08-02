localStorage.setItem('close-sidebar', 'true');

// Status sidebar
let sidebar = document.querySelector(".sidebar");
const btnSwitch = document.querySelector('.ico-menu');

btnSwitch.addEventListener('click', () => {
  sidebar.classList.toggle("close");

  // Guardamos el modo en localstorage.
  if(sidebar.classList.contains('close')){
    localStorage.setItem('close-sidebar', 'true');
  } else {
    localStorage.setItem('close-sidebar', 'false');
  }

});

if(localStorage.getItem('close-sidebar') === 'true'){
	sidebar.classList.add('close');
} else {
	sidebar.classList.remove('close');
}

// Status showMenu
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;
    arrowParent.classList.toggle("showMenu");
    });
  }