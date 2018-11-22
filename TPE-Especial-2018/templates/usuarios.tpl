{include file="header.tpl"}

 <div class="container">
   {include file="nav.tpl"}
 </div>

<div class="container">
  <h2 id="disc">Crear Usuario</h2>
    <form method="post" action="agregarusuario">
      <div class="form-group">
        <label for="nombreForm" id="title">Nombre de Usuario</label>
        <input type="text" class="form-control" id="nombreUser" name="nombreUser" value="nombreusuario">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="passUser" name="passUser" >
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
     </form>
   </div>


   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


   {include file="footer.tpl"}
