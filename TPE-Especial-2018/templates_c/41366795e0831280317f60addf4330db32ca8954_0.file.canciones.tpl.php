<?php
/* Smarty version 3.1.33, created on 2018-11-21 18:56:25
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\canciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf59c493fe409_05465169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41366795e0831280317f60addf4330db32ca8954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\canciones.tpl',
      1 => 1542822983,
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
function content_5bf59c493fe409_05465169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
   <h1 id="can"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
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
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
         </div>

         <div class="container">
           <h2 id="disc">Filtrar Canciones</h2>
             <form method="post" action="filtrarcanciones">
               <div class="form-group">
                  <label for="sel1" id="title">Seleccionar disco</label>
                  <select class="form-control" id="val-form" name="val-form">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Discos']->value, 'discos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discos']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['discos']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['discos']->value['nombre'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Admin']->value;?>
" id="hide-v">
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['IdUser']->value;?>
" id="hide-c">
              </div>

         <div id="com-div" class="container">


         </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
