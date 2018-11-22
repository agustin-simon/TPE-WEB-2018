"use strict";

let templatesVisitantes;

fetch('js/templates/visitantes.handlebars')
.then(response => response.text())
.then(template => {
    templatesVisitantes = Handlebars.compile(template); //compila y prepara el template

    getComentariosV();
})


function getComentariosV() {
  fetch("api/comentario")
  .then(response => response.json())
  .then(jsonComentarios => {
      mostrarComentariosV(jsonComentarios);
  })
}

function mostrarComentariosV(jsonComentarios) {
  let context = {
      comentariosV : jsonComentarios
  }
  let html2 = templatesVisitantes(context);
  document.querySelector("#com-div-vis").innerHTML = html2;
}
