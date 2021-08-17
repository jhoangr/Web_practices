<!DOCTYPE html>
<html>
<!--
 <head>
 <meta charset="utf-8" />
 <title>MouseTecnhologies</title>
 <link rel="stylesheet" type="text/css"  
  href="/views/css.css" />
  <script src="/views/listarProductos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
  <header>

   

  </header>
-->

<body>
  <section>
         
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
            
     <?php $i=1; foreach($categories as $categoria)
     {?>
     <?php echo $i;?>
     <option value="<?php echo $i;?>">
     <?php echo $categoria["NOM"];?> 
     <?php $i++;?>
     </option>
     <?php } ?>
     </select>
    
    <script>
     var valor=0;
     $('select#categories').on('change',function(){ valor=$(this).val(); 
     var accio="llistar-productesbyID"; 
     $("#content").load("http://tdiw-d5.deic-docencia.uab.cat/index.php?accio="+accio+"&categoriaID="+valor); 
      });
    </script>
    </form>
                
  <div id="content"></div>      
 </section> 

 
 </body> 



</html>
