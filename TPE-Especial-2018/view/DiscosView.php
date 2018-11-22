<?php

require_once('libs/Smarty.class.php');

class DiscosView
{
  private $Smarty;

  function __construct() {

    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Discografia) {

       $this->Smarty->assign('Titulo',$Titulo);
       $this->Smarty->assign('Discografia',$Discografia);
       $this->Smarty->display('templates/discografia.tpl');
  }

  function MostrarEditarDisco($Titulo, $Disco){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Disco',$Disco);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/EditarDisco.tpl');
  }

}


 ?>
