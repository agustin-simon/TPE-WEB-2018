"use strict";

let templatesComentarios;

fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    templatesComentarios = Handlebars.compile(template); //compila y prepara el template

    getComentarios();
})


function getComentarios() {
  fetch("api/comentario")
  .then(response => response.json())
  .then(jsonComentarios => {
      mostrarComentarios(jsonComentarios);       
  })
}

function mostrarComentarios(jsonComentarios) {
  let context = {
      comentarios : jsonComentarios
  }
  let html = templatesComentarios(context);
  document.querySelector("#com-div").innerHTML = html;
}
