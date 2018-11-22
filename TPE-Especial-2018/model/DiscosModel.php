<?php

class DiscosModel
{
  private $db;

  function __construct() {

      $this->db = $this->Connect();
  }

  function Connect() {
    return new PDO('mysql:host=localhost;'
         .'dbname=db_discografia;charset=utf8'
         , 'root', '');
  }
  function GetDiscos() {
      $sentencia = $this->db->prepare( "select * from disco");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDisco($id){

      $sentencia = $this->db->prepare( "select * from disco where id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function BorrarDisco($idTarea) {
      $sentencia = $this->db->prepare( "delete from disco where id=?");
      $sentencia-> execute(array($idTarea));
  }
}
 ?>
