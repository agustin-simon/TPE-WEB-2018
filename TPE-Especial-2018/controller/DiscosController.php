<?php

require_once "./view/DiscosView.php";
require_once "./model/DiscosModel.php";
require_once "SecuredController.php";

class DiscosController
  {
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {

      $this->view = new DiscosView();
      $this->model = new DiscosModel();
      $this->Titulo = "Discografia";
  }

  function Home() {
      $Canciones = $this->model->GetDiscos();
      $this->view->Mostrar($this->Titulo, $Canciones);
  }

}
 ?>
