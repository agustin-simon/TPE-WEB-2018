{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container">
   <h1 id="can">{$Titulo}</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Disco</th>
              </tr>
            </thead>
            <tbody>
              {foreach $Canciones item=cancion}
              <tr>
              <th scope="col">{$cancion['c_id']}</th>
              <th scope="col">{$cancion['c_nombre']}</th>
              <th scope="col">{$cancion['c_duracion']}</th>
              <th scope="col">{$cancion['nombre']}</th>
              </tr>
              {/foreach}
            </tbody>
          </table>
         </div>

         <div class="container">
           <h2 id="disc">Filtrar Canciones</h2>
             <form method="post" action="filtrarcancionesv">
               <div class="form-group">
                  <label for="sel1" id="title">Seleccionar disco</label>
                  <select class="form-control" id="val-form" name="val-form">
                    {foreach $Discos item=discos}
                    <option value="{$discos['id']}">{$discos['nombre']}</option>
                    {/foreach}
                  </select>
                </div>
               <button type="submit" class="btn btn-primary" id="btn-cat">Filtrar</button>
              </form>
            </div>
            <div class="container"><h2 id="disc">Comentarios</h2></div>
         <div id="com-div-vis" class="container">


         </div>

    {include file="footer.tpl"}
