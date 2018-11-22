<?php

require_once('libs/Smarty.class.php');

class AdminView
{
  private $Smarty;

  function __construct() {

    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Discografia, $Canciones, $Usuarios, $Datos) {

       $this->Smarty->assign('Titulo',$Titulo);
       $this->Smarty->assign('Discografia',$Discografia);
       $this->Smarty->assign('Canciones',$Canciones);
       $this->Smarty->assign('Usuarios',$Usuarios);
       $this->Smarty->assign('Datos',$Datos);
       $this->Smarty->display('templates/admin.tpl');
  }

  function MostrarEditarDisco($Titulo, $Disco){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Disco',$Disco);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/EditarDisco.tpl');

  }

  function MostrarEditarCancion($Titulo, $Cancion, $Datos){

    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Cancion',$Cancion);
    $this->Smarty->assign('Datos',$Datos);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/EditarCancion.tpl');
  }
}


 ?>
