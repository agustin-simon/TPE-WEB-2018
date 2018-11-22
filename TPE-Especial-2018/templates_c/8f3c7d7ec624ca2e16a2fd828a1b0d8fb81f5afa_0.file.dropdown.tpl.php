<?php
/* Smarty version 3.1.33, created on 2018-10-11 18:05:48
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018-Original\templates\dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbf74dc8c0b51_84002756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f3c7d7ec624ca2e16a2fd828a1b0d8fb81f5afa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018-Original\\templates\\dropdown.tpl',
      1 => 1539273947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbf74dc8c0b51_84002756 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
         <a class="dropdown-item" href="#" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
