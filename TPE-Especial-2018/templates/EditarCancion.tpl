{include file="header.tpl"}

    <div class="container">
        <h1>{$Titulo}</h1>
      <h2>Formulario</h2>
      <form method="post" action="{$home}/guardareditarcancion">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Cancion['c_id']}">
        <div class="form-group">
          <label for="nombreForm" id="lab">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Cancion['c_nombre']}">
        </div>
        <div class="form-group">
          <label for="duracionForm">Duracion</label>
          <input type="text" class="form-control" id="duracionForm" name="duracionForm" value="{$Cancion['c_duracion']}">
        </div>
        <div class="form-group">
           <label for="sel1" id="lab">Seleccionar disco</label>
           <select class="form-control" id="discoForm" name="discoForm" value="{$Cancion['c_disco']}">
             {foreach $Datos item=dato}
             <option value="{$dato['id']}">{$dato['nombre']}</option>
             {/foreach}
           </select>
         </div>
        <button type="submit" class="btn btn-primary" id="lab">Editar Cancion</button>
      </form>
    </div>
{include file="footer.tpl"}
