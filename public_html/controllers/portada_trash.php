<!DOCTYPE html>
<html>
 <head>
 <meta charset=utf-8" />
 <title>MouseTecnhologies</title>
 <link rel="stylesheet" type="text/css"  
  href="/views/css_pagina.css" />
  <script src="/views/listarProductos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
  <header>

   

  </header>
  <body>
      <section id="sec1">
           <div id="contenidor2">
            <div style="grid-area: menuGran">MENU</div>
            <div id="menuL"style="grid-area: ml">MENU_LATERAL</div>
	    <script>
		$(document).ready(function(){
			$("button").click(function(){
				$("#cat").toggle(250);});
		});
	   </script>
           <button>Mostrar_categorias</button>           

           <form method="post" id="cat" >
           CATEGORIAS:
           <select name="cat" id="categories">
           <?php require_once(__DIR__ . "/categories.php")?>
           </select>
           <script>
                var valor=0;
                $('select#categories').on('change',function(){ valor=$(this).val(); var accio="llistar-productesbyID"; 
                $("#content").load("http://tdiw-d5.deic-docencia.uab.cat/index.php?accio="+accio+"&categoriaID="+valor); 
                });

                
            </script>
	    
            <div id="content">

             </div>
          </form>
                  

           <div style="grid-area:titol"><h3>MouseTecnhologies</h3></div>
           <div style="grid-area:login">
           <form name="login">
              <table width="50" border="1">
                  <tr>
                      <th scope="row"><h4>Usuario</h4></th>
                      <td>
                          <span class="cnt">
                              <input name="usuario" type="text" class="Input" value="" size="10" />
                          </span>
                      </td>
                
                      <th height="20" scope="row"><h4>Contraseña</h4></th>
                      <td>
                          <span class="cnt">
                              <input name="password" type="password" class="Input" value="" size="10" />
                          </span>
                      </td>
                      <td>
                          <span class="cnt">
                              <input value="Login" target="_parent" onclick="Login()" type="button" class="boton" />
                          </span>
                      </td>
                  </tr>

              </table>
           </form>
          <a href="file:///E:/Universidad/Tercero/Web/registrar.html">Registrar</a>
          </div>        
        </div>
 </section> 
 
 <section>

 <div id="contenidor">
    


    <div style="grid-column: 1  / 2"></div>
    <div style="grid-column: 3 / 4 "></div>
 <div style="grid-column: 1  / 2"></div>
<div style="grid-column: 3 / 4"></div>
 
   </div>


 </section>


</body>
</html>
