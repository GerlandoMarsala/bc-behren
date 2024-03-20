let toggle = document.querySelector(".toggle");
let body = document.querySelector("body");

toggle.addEventListener("click", function () {
  body.classList.toggle("open");
});


// galerie images
$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: '.grid-item',
});