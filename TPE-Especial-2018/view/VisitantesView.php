<?php

require_once('libs/Smarty.class.php');

class VisitantesView
{
  private $Smarty;

  function __construct() {

    $this->Smarty = new Smarty();
  }

  function MostrarVisitantes($Titulo, $Canciones, $Discos, $Comentarios) {

       $this->Smarty->assign('Titulo',$Titulo);
       $this->Smarty->assign('Canciones',$Canciones);
       $this->Smarty->assign('Discos',$Discos);
       $this->Smarty->assign('Comentarios',$Comentarios);
       $this->Smarty->display('templates/visitantes.tpl');
  }
}


 ?>
