<?php
/* Smarty version 3.1.33, created on 2018-10-19 00:56:23
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc90f97421887_27061725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34ea4e1201a79593002fc7ff7f23f9628f2d162' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\index.tpl',
      1 => 1539829945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:inicio.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc90f97421887_27061725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" id="cont">
  <?php $_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
