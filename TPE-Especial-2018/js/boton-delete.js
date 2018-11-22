"use strict";

document.addEventListener('click', borrarComentario);

function borrarComentario() {

  let admin = document.getElementById('hide-v').value;

  if (admin > 0) {

      if (event.target.className == "btn btn-primary btn-sm"){
        let id = event.target.value;

        let url = 'api/comentario/'+id;

        fetch(url, {
            method: 'DELETE',
            contentType: "application/json",
            success: function() {
            alert("Proposal deleted successfully.");
            },
          }).catch(error => console.error('Error:', error));

      }
  }
}
