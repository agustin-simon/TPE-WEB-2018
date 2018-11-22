<?php
/* Smarty version 3.1.33, created on 2018-10-18 03:12:57
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018-Original\templates\EditarDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7de19dcf246_10332833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9274f18f8a2ba6c0bb3416d9d1bf61662527a8c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018-Original\\templates\\EditarDisco.tpl',
      1 => 1539825170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc7de19dcf246_10332833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardareditardisco">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Disco']->value['id'];?>
">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm" value="<?php echo $_smarty_tpl->tpl_vars['Disco']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="<?php echo $_smarty_tpl->tpl_vars['Disco']->value['descripcion'];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Editar Disco</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
