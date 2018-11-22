{include file="header.tpl"}
{include file="nav.tpl"}




    <div class="container">
      <h1 id="disc">{$Titulo}</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
              </tr>
            </thead>
            <tbody>
              {foreach $Discografia item=disco}
              <tr>
              <th scope="col">{$disco['id']}</th>
              <th scope="col">{$disco['nombre']}</th>
              <th scope="col">{$disco['descripcion']}</th>
              </tr>
              {/foreach}
            </tbody>
          </table>
    {include file="footer.tpl"}
