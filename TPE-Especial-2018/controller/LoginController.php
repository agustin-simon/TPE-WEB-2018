<?php

require_once "./view/LoginView.php";
require_once "./model/UsuarioModel.php";

  class LoginController extends SecuredController
    {
      private $view;
      private $model;
      private $Titulo;

  function __construct()
    {
        $this->view = new LoginView();
        $this->model = new UsuarioModel();
        $this->Titulo = "Login";
    }

    function login(){
     $this->view->mostrarLogin();
    }

    function logout(){
      session_start();
      session_destroy();
      header(HOME);
    }

    function verificarLogin(){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
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
                header(ADMIN);

            }else{
              $this->view->mostrarLogin("Contraseña incorrecta");
            }
          }
      }else{
        $this->view->mostrarLogin("No existe el usario");
      }
    }

  }
 ?>
