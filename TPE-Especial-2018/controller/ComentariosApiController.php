<?php

require_once "Api.php";
require_once "./model/ComentariosModel.php";

class ComentariosApiController extends Api{

  private $model;

  function __construct(){

    parent::__construct();

    $this->model= new ComentariosModel();

  }

  function GetComentarios($param = null) {

    if(isset($param)) {
      $id_comentario=$param[0];

      $data= $this->model->GetComentario($id_comentario);
    } else {
      $data= $this->model->GetComentarios();
    }

    if(isset($data)) {
      return $this->json_response($data, 200);
    }
    else {
      return $this->json_response(null, 404);
    }
  }

  function InsertComentario($param = null) {

        $objetoJson = $this->getJSONData();
        $this->model->InsertarComentario($objetoJson->texto, $objetoJson->usuario_id,$objetoJson->id_item,$objetoJson->puntaje);
  }

  function DeleteComentarios($param = null) {

    if(count($param) == 1){
        $id_tarea = $param[0];
        $r =  $this->model->BorrarComentario($id_tarea);
        if($r == false){
          return $this->json_response($r, 300);
        }
        return $this->json_response($r, 200);
    }else{
        return  $this->json_response("No task specified", 300);
    }
  }

}
?>
