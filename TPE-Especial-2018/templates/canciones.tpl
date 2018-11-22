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
             <form method="post" action="filtrarcanciones">
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



           <div class="container">
             <h2 id="disc">Crear Comentario</h2>
               <form method="post">
                 <div class="form-group">
                   <label for="nombreForm" id="title">Texto</label>
                   <input type="text" class="form-control" id="texto">
                 </div>
                 <div class="form-group">
                    <label for="sel1" id="title">itemID</label>
                    <select class="form-control" id="itemID" name="itemID">
                      {foreach $Canciones item=cancion}
                      <option value="{$cancion['c_id']}">{$cancion['c_nombre']}</option>
                      {/foreach}
                    </select>
                  </div>
                  <div class="form-group">
                     <label for="sel1" id="title">Puntaje</label>
                     <select class="form-control" id="puntaje" name="puntaje">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                     </select>
                   </div>
                 <button type="submit" class="btn btn-primary" id="btn-form">Crear</button>
                </form>
              </div>

              <div id="hide" class="container">
                <input type="text" class="form-control" value="{$Admin}" id="hide-v">
                <input type="text" class="form-control" value="{$IdUser}" id="hide-c">
              </div>

         <div id="com-div" class="container">


         </div>

    {include file="footer.tpl"}
