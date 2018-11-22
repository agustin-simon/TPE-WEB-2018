<?php
/* Smarty version 3.1.33, created on 2018-11-21 18:08:43
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5911be50cc9_07916213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f194d9dff5900bffe01ab8e2a306285affccf18e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\usuarios.tpl',
      1 => 1542820121,
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
function content_5bf5911be50cc9_07916213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class="container">
   <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </div>

<div class="container">
  <h2 id="disc">Crear Usuario</h2>
    <form method="post" action="agregarusuario">
      <div class="form-group">
        <label for="nombreForm" id="title">Nombre de Usuario</label>
        <input type="text" class="form-control" id="nombreUser" name="nombreUser" value="nombreusuario">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="passUser" name="passUser" >
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
     </form>
   </div>


   <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>


   <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
