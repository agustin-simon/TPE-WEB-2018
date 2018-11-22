<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:13:27
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6b98741bd00_28244699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e41561d4592a135a8584a9b5e71de29e5f696d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\admin.tpl',
      1 => 1542895999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf6b98741bd00_28244699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class="container">
   <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div class="row">
       <div class="col-3"></div>
       <div class="col-3"><h1 id="disc"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1></div>
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
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Discografia']->value, 'disco');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
?>
       <tr>
       <th scope="col"><?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
</th>
       <th scope="col"><?php echo $_smarty_tpl->tpl_vars['disco']->value['nombre'];?>
</th>
       <th scope="col"><?php echo $_smarty_tpl->tpl_vars['disco']->value['descripcion'];?>
</th>
       <th><a href="borrardisco/<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
"><button type="button" class="btn btn-secondary btn-sm" id="but">BORRAR</button></a><a href="editardisco/<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
"><button type="button" class="btn btn-secondary btn-sm" id="but">EDITAR</button></a></th>
       </tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Canciones']->value, 'cancion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
?>
      <tr>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_id'];?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_nombre'];?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_duracion'];?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['nombre'];?>
</th>
      <th><a href="borrarcancion/<?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_id'];?>
"><button type="button" class="btn btn-secondary btn-sm" id="but">BORRAR</button></a><a href="editarcancion/<?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_id'];?>
"><button type="button" class="btn btn-secondary btn-sm" id="but">EDITAR</button></a></th>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</option>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</option>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Canciones']->value, 'cancion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_nombre'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
               <button type="submit" class="btn btn-primary">Borrar Imagen</button>
              </form>
            </div>


<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
