<?php
/**
 *
 */
class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_discografia;charset=utf8'
    , 'root', '');
  }

  function GetUsuario(){

      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre, $pass, $admin){

    if($nombre != "nombreusuario") {
      $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass, admin) VALUES(?,?,?)");
      $sentencia->execute(array($nombre, $pass, $admin));
    }
  }

  function GetUser($user){

      $sentencia = $this->db->prepare( "select * from usuario where nombre=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}


 ?>
