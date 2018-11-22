{include file="header.tpl"}

    <div class="container">
      <h1>{$Titulo}</h1>
      <h2>Formulario</h2>
      <form method="post" action="{$home}/guardareditardisco">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Disco['id']}">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm" value="{$Disco['nombre']}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="{$Disco['descripcion']}">
        </div>
        <button type="submit" class="btn btn-primary">Editar Disco</button>
      </form>
    </div>
{include file="footer.tpl"}
