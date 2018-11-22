<?php

require_once('libs/Smarty.class.php');

class CancionesView
{
  private $Smarty;

  function __construct() {

    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Canciones, $Discos, $Comentarios, $Id_user, $Adm_user) {

       $this->Smarty->assign('Titulo',$Titulo);
       $this->Smarty->assign('Canciones',$Canciones);
       $this->Smarty->assign('Discos',$Discos);
       $this->Smarty->assign('IdUser',$Id_user);
       $this->Smarty->assign('Admin',$Adm_user);
       $this->Smarty->assign('Comentarios',$Comentarios);
       $this->Smarty->display('templates/canciones.tpl');
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
