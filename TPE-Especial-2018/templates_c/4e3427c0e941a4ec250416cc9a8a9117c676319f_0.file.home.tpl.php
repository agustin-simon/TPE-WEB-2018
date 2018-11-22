<?php
/* Smarty version 3.1.33, created on 2018-10-16 23:34:43
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018-Original\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc65973736214_15877573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e3427c0e941a4ec250416cc9a8a9117c676319f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018-Original\\templates\\home.tpl',
      1 => 1539725661,
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
function content_5bc65973736214_15877573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
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
"><button type="button" class="btn btn-secondary btn-sm">BORRAR</button></a><a href="editardisco/<?php echo $_smarty_tpl->tpl_vars['disco']->value['id'];?>
"><button type="button" class="btn btn-secondary btn-sm">EDITAR</button></a></th>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
      </div>

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
           <button type="submit" class="btn btn-primary">Crear Disco</button>
         </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
