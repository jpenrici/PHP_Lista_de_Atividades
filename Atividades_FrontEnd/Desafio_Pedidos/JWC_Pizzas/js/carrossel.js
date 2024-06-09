// Controle do Slide Show

let indiceDoSlide = 0;
let intervalo = 5000;
exibirSlide();

function exibirSlide() {
  preparar();
  indiceDoSlide++;

  // Documentação: https://developer.mozilla.org/en-US/docs/Web/API/setTimeout
  setTimeout(exibirSlide, intervalo); // Tempo em milisegundos.
}

function preparar() {
  const slides = document.getElementsByClassName("slide");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  indiceDoSlide = indiceDoSlide < 0 ? slides.length - 1 : indiceDoSlide;
  indiceDoSlide = indiceDoSlide % slides.length;
  slides[indiceDoSlide].style.display = "block";
  // console.log("Slide: ", indiceDoSlide);
}

function mover(n) {
    indiceDoSlide += n;
    preparar();
}
