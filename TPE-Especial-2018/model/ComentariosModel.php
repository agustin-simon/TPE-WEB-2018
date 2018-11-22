<?php

class ComentariosModel {

  private $db;

  function __construct() {

      $this->db = $this->Connect();
  }

  function Connect() {
    return new PDO('mysql:host=localhost;'
         .'dbname=db_discografia;charset=utf8'
         , 'root', '');
  }

 function GetComentarios() {
   $sentencia = $this->db->prepare("select * from comentario");
   $sentencia->execute();
   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
 }

 function GetComentario($id) {
   $sentencia = $this->db->prepare("select * from comentario where id_comentario=?");
   $sentencia->execute(array($id));
   return $sentencia->fetch(PDO::FETCH_ASSOC);
 }

 function InsertarComentario($texto,$idUser,$idItem,$puntaje) {
   $sentencia = $this->db->prepare("INSERT INTO comentario(texto,usuario_id,id_item,puntaje) VALUES(?,?,?,?)");
   $sentencia->execute(array($texto,$idUser,$idItem,$puntaje));
 }

 function BorrarComentario($id) {
     $sentencia = $this->db->prepare( "delete from comentario where id_comentario=?");
     $sentencia-> execute(array($id));
 }

 function GetUsuarios() {
   $sentencia = $this->db->prepare( "select * from usuario");
   $sentencia->execute();
   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
 }


}


 ?>
