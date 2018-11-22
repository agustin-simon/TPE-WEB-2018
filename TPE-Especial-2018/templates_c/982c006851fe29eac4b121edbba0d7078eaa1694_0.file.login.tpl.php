<?php
/* Smarty version 3.1.33, created on 2018-10-19 00:56:27
  from 'C:\xampp\htdocs\web2\TPE-Especial-2018\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc90f9bbfc485_63879804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '982c006851fe29eac4b121edbba0d7078eaa1694' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Especial-2018\\templates\\login.tpl',
      1 => 1539836685,
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
function content_5bc90f9bbfc485_63879804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <div class="container">
     <h1 id="disc"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

     <form method="post" action="verificarLogin">
       <div class="form-group">
         <label for="exampleInputEmail1">Usuario</label>
         <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
         <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
       </div>
       <div class="">
         <h2 id="lab"><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</h2>
       </div>
       <button type="submit" class="btn btn-primary" id="but">Login</button>
     </form>
   </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
