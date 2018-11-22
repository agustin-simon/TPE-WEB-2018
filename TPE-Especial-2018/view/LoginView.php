<?php
  class LoginView
  {
    private $Smarty;

    function __construct() {

      $this->Smarty = new Smarty();
    }

    function mostrarLogin($Message = '') {

      $this->Smarty->assign('Titulo',"Login");
      $this->Smarty->assign('Message',$Message);
      $this->Smarty->display('templates/login.tpl');
    }

}
 ?>
