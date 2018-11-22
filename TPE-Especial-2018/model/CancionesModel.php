<?php

class CancionesModel
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
  function GetCanciones() {

      $sentencia = $this->db->prepare("select c_id,c_nombre,c_duracion,nombre from cancion inner join disco on cancion.c_disco=disco.id order by id=disco.id");
      //$sentencia = $this->db->prepare( "select * from cancion");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetCancion($id) {
      $sentencia = $this->db->prepare( "select * from cancion where c_id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function GetComentarios() {
      $sentencia = $this->db->prepare("select * from comentario,cancion");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function FilterCanciones($id_disco) {
      $sentencia = $this->db->prepare( "select c_id,c_nombre,c_duracion,nombre from cancion inner join disco on cancion.c_disco=disco.id where c_disco=?");
      //$sentencia = $this->db->prepare("select * from cancion where c_disco=?");
      $sentencia->execute(array($id_disco));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDiscos() {
      $sentencia = $this->db->prepare( "select * from disco");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  } 



}
 ?>
