<?php
/* Smarty version 3.1.33, created on 2018-10-10 20:44:30
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe488eb5cd52_82693286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3542b77da9b19e77248e082d7914bacb8d4c44df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\home.tpl',
      1 => 1539197068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:index.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbe488eb5cd52_82693286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>



          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Disco</th>
                <th scope="col">Cancion</th>
                <th scope="col">Duracion</th>
                <th scope="col">Descripcion</th>
                <th scope="col">BORRAR</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Discografia']->value, 'disco');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
?>
              <tr>
              <th scope="col"><?php echo $_smarty_tpl->tpl_vars['disco']->value['d_id'];?>
</th>
              <th scope="col"><?php echo $_smarty_tpl->tpl_vars['disco']->value['d_nombre'];?>
</th>
              <th scope="col"><?php echo $_smarty_tpl->tpl_vars['disco']->value['d_descripcion'];?>
</th>
              <th><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['disco']->value['d_id'];?>
">BORRAR</a></th>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>


    <div class="container">
      <h2>Formulario</h2>
          <form method="post" action="agregar">
             <div class="form-group">
               <label for="tituloForm">Titulo</label>
               <input type="text" class="form-control" id="tituloForm" name="tituloForm">
             </div>
             <div class="form-group">
               <label for="descripcionForm">Descripcion</label>
               <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
             </div>
             <div class="form-group form-check">
               <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
               <label class="form-check-label" for="completadaForm">Completada?</label>
         </div>
           <button type="submit" class="btn btn-primary">Crear Tarea</button>
         </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
