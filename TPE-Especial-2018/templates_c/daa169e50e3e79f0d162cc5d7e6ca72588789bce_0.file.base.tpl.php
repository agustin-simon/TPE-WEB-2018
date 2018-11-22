<?php
/* Smarty version 3.1.33, created on 2018-10-10 01:34:58
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbd3b223e45e6_27476330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daa169e50e3e79f0d162cc5d7e6ca72588789bce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\base.tpl',
      1 => 1539127725,
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
function content_5bbd3b223e45e6_27476330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

    <div class="container">
      <div class="row">
      <div class="col-md-6">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Discografia']->value, 'disco');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
?>
      <ul class="list-group">
        <li class="list-group-item disabled"><?php echo $_smarty_tpl->tpl_vars['disco']->value['d_nombre'];?>
</li>
      </ul>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
      <div class="col-md-6">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Canciones']->value, 'cancion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
?>
      <ul class="list-group">
        <li class="list-group-item disabled"><?php echo $_smarty_tpl->tpl_vars['cancion']->value['c_nombre'];?>
</li>
      </ul>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"><h2>Agregar datos</h2></div>
      <div class="col-md-4"></div>
    </div>

    <div class="container">
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Descripcion</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
     </div>
      <div class="col-md-4"></div>
    </div>





    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
