<?php

class HomeView
{
  private $Smarty;

  function __construct() {

    $this->Smarty = new Smarty();

  }

  function Mostrar() {

    $this->Smarty->assign('Titulo',"Home");
    $this->Smarty->display('templates/index.tpl');
  }


}



 ?>
