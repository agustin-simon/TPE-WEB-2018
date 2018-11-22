<?php

require_once "./view/HomeView.php";

  class HomeController 
    {
      private $view;
      private $Titulo;

  function __construct()
    {
        $this->view = new HomeView();
        $this->Titulo = "Home";
    }

   function Home() {
     $this->view->Mostrar();
   }


  }
 ?>
