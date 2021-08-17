<!DOCTYPE HTML>

<html>
<body>
<script type="text/javascript">
        function validar(f) {
            var ok = true;
            var msg = "Errores:\n";
            var expregPASSW = /^[\w]+$/;
            var expregMAIL = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            //var expregNAME = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
            var expregNAME = /^[A-Za-z\s]+$/;
            var expregDIR = /^[A-Za-z\s\,\0-9]+$/;
             


           
            //validacion nombre
            nombre = document.getElementById("nombre").value;
               
            if (!expregNAME.test(nombre) || (nombre.trim() =="")) {
                     ok = false;
                     msg += "- wrong name\n"
                 }


                //validacion mail
                mail = document.getElementById("mail").value;
                if (!expregMAIL.test(mail|| (mail.trim() ==""))) {
                    ok = false;
                    msg += "- wrong mail\n"
                }

                //validacion contraseña
                password = document.getElementById("password").value;
            if (!expregPASSW.test(password) || (password.trim() == "")) {
                    ok = false;
                    msg += "- fuckpass\n";

                }
                //validación misma contraseña
                repassword = document.getElementById("repassword").value;
            if (password != repassword) {

                    ok = false;
                    msg += "- Introduce la misma contraseña\n";
                }



                //validacion direccion y poblacion
                direccion = document.getElementById("direccion").value;
            if (!(expregDIR.test(direccion)) || (direccion.trim() == "")) {
                    ok = false;
                    msg += "- wrong direccion\n";
                }

                poblacion = document.getElementById("poblacion").value
            if (!(expregDIR.test(poblacion)) || (poblacion.trim() == "")) {
                    ok = false;
                    msg += "- wrong poblacion\n";
                }

                //validacion codgopostal
                cpostal = document.getElementById("cpostal").value;
                if (!(/^\d{5}$/.test(cpostal))) {
                    ok = false;
                    msg += "- wrong pcode\n";
                }
                
               

                if (ok == false)
                    alert(msg);
                return ok;
            }
        

    </script>
    
 

    <section id="main-content">

   
       <div class="estiloForm">
            
            <form name="formularioContacto" method="post" action="/../index.php?accio=registrar" onsubmit="return validar(this)">

                <label>Nombre</label><input id="nombre" name="nombre" type="text" /><br />
                <label>Mail</label><input id="mail" name="mail" type="text" /><br />
                <label>Contraseña</label><input id="password" name="password" type="password" /><br />
                <label>Repite contraseña</label><input id="repassword" name="repassword" type="password" /><br />
                <label>Dirección</label><input id="direccion" name="direccion" type="text" maxlength="30" /><br />
                <label>Población</label><input id="poblacion" name="poblacion" type="text" maxlength="30" /><br />
                <label>Código Postal</label><input id="cpostal" name="cpostal" type="text" maxlength="5" /><br />

                <input type="submit" value="Enviar" /> <input type="reset" value="Cancelar" />
            </form>
        </div>
    
    </section> <!-- / #main-content -->

</body>
</html>
