<?php
require_once  "./view/UsuarioView.php";
require_once  "./model/UsuarioModel.php";
require_once  "SecuredController.php";

class UsuarioController
 {

  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {

    $this->view = new UsuarioView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
      $this->view->MostrarUsers($this->Titulo);
  }

  function InsertUsuario(){
    $nombre = $_POST["nombreUser"];
    $pass = $_POST["passUser"];
    $admin = 0;

    $hash = password_hash($pass, PASSWORD_DEFAULT);

      $r = $this->model->InsertarUsuario($nombre, $hash, $admin);

        $user = $_POST["nombreUser"];
        $pass = $_POST["passUser"];

        $dbUser = $this->model->getUser($user);

        if(isset($dbUser)){
            if ($dbUser == null) {
              $this->view->mostrarLogin("No existe el usuario");
            }
            else {
              if (password_verify($pass, $dbUser[0]["pass"])){

                  session_start();
                  $_SESSION['User'] = $user;
                  $_SESSION['Admin'] = $dbUser[0]["admin"];
                  $_SESSION['ID'] = $dbUser[0]["id"];
                  header(CANCIONES);
              }
            }
        }
      

    header(USERS);
  }

}

 ?>
