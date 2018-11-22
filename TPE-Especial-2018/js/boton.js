"use strict";

document.getElementById("hide").style.display = "none";

let btn = document.getElementById("btn-form");
btn.addEventListener("click", publicarComentario);

function publicarComentario() {
  let texto = document.getElementById('texto').value;
  let userID = document.getElementById('hide-c').value;
  let itemID = document.getElementById('itemID').value;
  let puntaje = document.getElementById('puntaje').value;

  let obj = { id_comentario: "", texto: texto, usuario_id: userID, id_item: itemID, puntaje: puntaje};

  fetch('api/comentario', {
      method: 'POST',
      body: JSON.stringify(obj),
      headers: {
        'Content-Type': 'application/json'
      }
  }).then(res => res.json())
  .catch(error => console.error('Error:', error));
}
