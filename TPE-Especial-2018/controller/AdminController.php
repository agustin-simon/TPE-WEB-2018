<?php

require_once "./view/AdminView.php";
require_once "./model/AdminModel.php";
require_once "SecuredController.php";

class AdminController extends SecuredController
  {
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

      $this->view = new AdminView();
      $this->model = new AdminModel();
      $this->Titulo = "Administrador";
  }

  function Home() {
      $Discos = $this->model->GetDiscos();
      $Canciones = $this->model->GetCanciones();
      $Usuarios = $this->model->GetUsuarios();
      $Datos = $this->model->GetDatos();
      $this->view->Mostrar($this->Titulo,$Discos,$Canciones,$Usuarios,$Datos);
  }

  function InsertDisco() {
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];

    if(isset($_SESSION['Admin'])) {

      if ($_SESSION['Admin'] > 0) {

          $this->model->InsertarDisco($titulo,$descripcion);
      }
    }
    header(ADMIN);
  }

  function BorrarDisco($param){

    if(isset($_SESSION['Admin'])) {

      if ($_SESSION['Admin'] > 0) {

          $this->model->BorrarDisco($param[0]);
      }
    }
    header(ADMIN);
  }

  function EditarDisco($param){
      $id_disco = $param[0];

      if(isset($_SESSION['Admin'])) {

        if ($_SESSION['Admin'] > 0) {

            $Disco = $this->model->GetDisco($id_disco);
            $this->view->MostrarEditarDisco("Editar Disco", $Disco);
        }
      } else {
        header(ADMIN);
      }

  }

  function GuardarEditarDisco(){
    $id_tarea = $_POST["idForm"];
    $titulo = $_POST["tituloForm"];
    $descripcion = $_POST["descripcionForm"];


    $this->model->GuardarEditarDisco($titulo,$descripcion,$id_tarea);

    header(ADMIN);
  }

  function InsertCancion() {
    $nombre = $_POST["nombreForm"];
    $duracion = $_POST["duracionForm"];
    $disco = $_POST["discoForm"];

    if(isset($_SESSION['Admin'])) {

      if ($_SESSION['Admin'] > 0) {

          if ($_FILES['adjunto']['type'] == "image/jpg" || $_FILES['adjunto']['type'] == "image/jpeg" ) {

             $this->model->InsertarCancion($nombre,$duracion,$disco, $_FILES['adjunto']['tmp_name']);
          } else {

            $this->model->InsertarCancion($nombre,$duracion,$disco);

          }
      }
    }
    header(ADMIN);

  }

  function BorrarCancion($param){

    if(isset($_SESSION['Admin'])) {
        if ($_SESSION['Admin'] > 0) {
            $this->model->BorrarCancion($param[0]);
        }
    }
    header(ADMIN);
  }

  function SeleccionarCategoria($param){
    $this->model->SelectCategoria($param[0]);
  }

  function EditarCancion($param){
      $Datos = $this->model->GetDatos();
      $id = $param[0];
      $Cancion = $this->model->GetCancion($id);

      if(isset($_SESSION['Admin'])) {
          if ($_SESSION['Admin'] > 0) {
                $this->view->MostrarEditarCancion("Editar Cancion", $Cancion, $Datos);
          }
      } else {
        header(ADMIN);
      }
  }

  function GuardarEditarCancion(){
    $id_tarea = $_POST["idForm"];
    $titulo = $_POST["nombreForm"];
    $descripcion = $_POST["duracionForm"];
    $disco = $_POST["discoForm"];

    $this->model->GuardarEditarCancion($titulo,$descripcion,$disco,$id_tarea);

    header(ADMIN);
  }

  function InsertUsuario(){
    $accion = $_POST['accion-Form'];
    $id = $_POST['usuario-Form'];

    if(isset($_SESSION['Admin'])) {
       if ($_SESSION['Admin'] > 0) {
          if(isset($id)) {
              if($accion == "Dar") {
                $admin = 1;
                $this->model->GuardarAdmin($admin,$id);
              }
              elseif ($accion == "Quitar") {
                $admin = 0;
                $this->model->GuardarAdmin($admin,$id);
              }
          }
       }
    }
    header(ADMIN);
  }

  function DeleteImagen() {

    if(isset($_SESSION['Admin'])) { //Verifica que sea administrador
         if($_SESSION['Admin'] > 0) {
            $id_cancion = $_POST['item-Form'];
            if(isset($id_cancion)) {
                $this->model->eliminarImagen($id_cancion);
            }
         }
    }
    header(ADMIN);
  }

}
 ?>
