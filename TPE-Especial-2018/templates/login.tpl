{include file="header.tpl"}
{include file="nav.tpl"}
   <div class="container">
     <h1 id="disc">{$Titulo}</h1>

     <form method="post" action="verificarLogin">
       <div class="form-group">
         <label for="exampleInputEmail1">Usuario</label>
         <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId">
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
         <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
       </div>
       <div class="">
         <h2 id="lab">{$Message}</h2>
       </div>
       <button type="submit" class="btn btn-primary" id="but">Login</button>
     </form>
   </div>
    {include file="footer.tpl"}
