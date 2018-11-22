<?php

require_once('libs/Smarty.class.php');


class UsuarioView
{

  private $Smarty;

  function __construct() {

    $this->Smarty = new Smarty();
  }

  function MostrarUsers($Titulo){
      $this->Smarty->assign('Titulo',$Titulo);
      $this->Smarty->display('templates/usuarios.tpl');
  }
}
?>
