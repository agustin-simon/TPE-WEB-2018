<?php

require_once "./view/CancionesView.php";
require_once "./model/CancionesModel.php";
require_once "SecuredController.php";

class CancionesController extends SecuredController
  {
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

      $this->view = new CancionesView();
      $this->model = new CancionesModel();
      $this->Titulo = "Canciones";
  }

  function Home() {
        $Adm_user = $_SESSION['Admin'];
        $Id_user = $_SESSION['ID'];

          if(isset($Adm_user)) {
            $Canciones = $this->model->GetCanciones();
            $Comentarios = $this->model->GetComentarios();
            $Discos = $this->model->GetDiscos();
            $this->view->Mostrar($this->Titulo, $Canciones, $Discos, $Comentarios, $Id_user, $Adm_user);
          }

  }

  function FiltrarCanciones() {
    $Adm_user= $_SESSION['Admin'];
    $Id_user = $_SESSION['ID'];
    $disco = $_POST['val-form'];

      $Canciones = $this->model->FilterCanciones($disco);
      $Comentarios = $this->model->GetComentarios();
      $Discos = $this->model->GetDiscos();
      $this->view->Mostrar($this->Titulo, $Canciones,$Discos, $Comentarios, $Id_user, $Adm_user);

  }


}
 ?>
