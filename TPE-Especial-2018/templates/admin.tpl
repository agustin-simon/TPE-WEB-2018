{include file="header.tpl"}

 <div class="container">
   {include file="nav.tpl"}
   <div class="row">
       <div class="col-3"></div>
       <div class="col-3"><h1 id="disc">{$Titulo}</h1></div>
       <div class="col-3"></div>
   </div>

   <div class="row">
     <h2 id="disc">Discos</h2>
     <table class="table" >
     <thead>
       <tr>
         <th scope="col">id</th>
         <th scope="col">Nombre</th>
         <th scope="col">Descripcion</th>
         <th scope="col">Modificar</th>
       </tr>
     </thead>
     <tbody>
       {foreach $Discografia item=disco}
       <tr>
       <th scope="col">{$disco['id']}</th>
       <th scope="col">{$disco['nombre']}</th>
       <th scope="col">{$disco['descripcion']}</th>
       <th><a href="borrardisco/{$disco['id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">BORRAR</button></a><a href="editardisco/{$disco['id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">EDITAR</button></a></th>
       </tr>
       {/foreach}
     </tbody>
   </table></div>

    <h2 id="disc">Canciones</h2>

    <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Duracion</th>
        <th scope="col">Disco</th>
        <th scope="col">BORRAR</th>
      </tr>
    </thead>
    <tbody>
      {foreach $Canciones item=cancion}
      <tr>
      <th scope="col">{$cancion['c_id']}</th>
      <th scope="col">{$cancion['c_nombre']}</th>
      <th scope="col">{$cancion['c_duracion']}</th>
      <th scope="col">{$cancion['nombre']}</th>
      <th><a href="borrarcancion/{$cancion['c_id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">BORRAR</button></a><a href="editarcancion/{$cancion['c_id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">EDITAR</button></a></th>
      </tr>
      {/foreach}
    </tbody>
  </table>


<div class="row">
  <div class="col-6"><div class="container">
    <h2 id="disc">Formulario</h2>
        <form method="post" action="agregar">
           <div class="form-group">
             <label for="tituloForm">Titulo</label>
             <input type="text" class="form-control" id="tituloForm" name="tituloForm">
           </div>
           <div class="form-group">
             <label for="descripcionForm">Descripcion</label>
             <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
           </div>
         <button type="submit" class="btn btn-primary" id="but">Crear Disco</button>
       </form>
  </div></div>
  <div class="col-6">
     <div class="container">
      <h2 id="disc">Crear cancion</h2>
          <form method="post" action="insertarcancion" enctype="multipart/form-data">
             <div class="form-group">
               <label for="nombreForm" id="title">Nombre</label>
               <input type="text" class="form-control" id="nombreForm" name="nombreForm">
             </div>
             <div class="form-group">
               <label for="duracionForm" id="title">Duracion</label>
               <input type="text" class="form-control" id="duracionForm" name="duracionForm">
             </div>
             <div class="form-group">
                <label for="sel1" id="title" >Seleccionar disco</label>
                <select class="form-control" id="discoForm" name="discoForm">
                  {foreach $Datos item=dato}
                  <option value="{$dato['id']}">{$dato['nombre']}</option>
                  {/foreach}
                </select>
              </div>
              <div class="form-group">
                <label for="adjunto">Adjuntar imagen</label>
                <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/jpeg">
            </div>
           <button type="submit" class="btn btn-primary" id="but">Crear Cancion</button>
         </form>
         </div></div>
        </div>
      </div>

      <div class="container">
        <h2 id="disc">Administracion</h2>
          <form method="post" action="agregaradmin">
            <div class="form-group">
               <label for="sel1" id="title" >Seleccionar Accion</label>
               <select class="form-control" id="accion-Form" name="accion-Form">
                 <option value="Dar">Dar Admin</option>
                 <option value="Quitar">Quitar Admin</option>
               </select>
             </div>
            <div class="form-group">
               <label for="sel1" id="title" >Seleccionar Usuario</label>
               <select class="form-control" id="usuario-Form" name="usuario-Form">
                 {foreach $Usuarios item=usuario}
                 <option value="{$usuario['id']}">{$usuario['nombre']}</option>
                 {/foreach}
               </select>
             </div>
            <button type="submit" class="btn btn-primary">Hacer Admin</button>
           </form>
         </div>

         <div class="container">
           <h2 id="disc">Borrar Imagen</h2>
             <form method="post" action="eliminarimagen">
               <div class="form-group">
                  <label for="sel1" id="title" >Seleccionar Cancion</label>
                  <select class="form-control" id="item-Form" name="item-Form">
                    {foreach $Canciones item=cancion}
                    <option value="{$cancion['c_id']}">{$cancion['c_nombre']}</option>
                    {/foreach}
                  </select>
                </div>
               <button type="submit" class="btn btn-primary">Borrar Imagen</button>
              </form>
            </div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


{include file="footer.tpl"}
