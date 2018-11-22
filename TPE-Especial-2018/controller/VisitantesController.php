<?php

require_once "./view/VisitantesView.php";
require_once "./model/CancionesModel.php";

class VisitantesController
  {
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
      $this->view = new VisitantesView();
      $this->model = new CancionesModel();
      $this->Titulo = "Canciones";
  }

  function Home() {
      $Canciones = $this->model->GetCanciones();
      $Comentarios = $this->model->GetComentarios();
      $Discos = $this->model->GetDiscos();
      $this->view->MostrarVisitantes($this->Titulo, $Canciones, $Discos, $Comentarios);
  }

  function FiltrarCanciones() {
    $disco = $_POST['val-form'];

      $Canciones = $this->model->FilterCanciones($disco);
      $Comentarios = $this->model->GetComentarios();
      $Discos = $this->model->GetDiscos();
      $this->view->MostrarVisitantes($this->Titulo, $Canciones,$Discos, $Comentarios);
  }
}
 ?>
