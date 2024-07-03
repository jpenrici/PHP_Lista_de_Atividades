// Slide Show Control

let index = 0;
let waitingTime = 5000;
show();

function show() {
  prepare();
  index++;

  // Doc: https://developer.mozilla.org/en-US/docs/Web/API/setTimeout
  setTimeout(show, waitingTime); // Time in milliseconds.
}

function prepare() {
  const slides = document.getElementsByClassName("slide");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  index = index < 0 ? slides.length - 1 : index;
  index = index % slides.length;
  slides[index].style.display = "block";
  // console.log("Slide: ", index);
}

function mover(n) {
  index += n;
  prepare();
}
