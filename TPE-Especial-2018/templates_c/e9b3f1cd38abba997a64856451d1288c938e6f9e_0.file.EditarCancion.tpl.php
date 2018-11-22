<?php
/* Smarty version 3.1.33, created on 2018-10-18 05:55:01
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018-Original\templates\EditarCancion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8041534e8d2_60607474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b3f1cd38abba997a64856451d1288c938e6f9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018-Original\\templates\\EditarCancion.tpl',
      1 => 1539834870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc8041534e8d2_60607474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardareditarcancion">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Cancion']->value['c_id'];?>
">
        <div class="form-group">
          <label for="nombreForm" id="lab">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Cancion']->value['c_nombre'];?>
">
        </div>
        <div class="form-group">
          <label for="duracionForm">Duracion</label>
          <input type="text" class="form-control" id="duracionForm" name="duracionForm" value="<?php echo $_smarty_tpl->tpl_vars['Cancion']->value['c_duracion'];?>
">
        </div>
        <div class="form-group">
           <label for="sel1" id="lab">Seleccionar disco</label>
           <select class="form-control" id="discoForm" name="discoForm" value="<?php echo $_smarty_tpl->tpl_vars['Cancion']->value['c_disco'];?>
">
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
        <button type="submit" class="btn btn-primary" id="lab">Editar Cancion</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
