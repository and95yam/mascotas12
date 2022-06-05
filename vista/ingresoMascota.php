<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="styleSheet" href="../estilo.css">
    
    <title>Ingresar Datos</title>
    <center> <h1>Ingreso de Datos</h1></center>  

</head>
<body>
    <div class="contenedor">
        <center>
            <form id="ingresar" action"#">
                
                <div class="datos">
                     <center><h2>INGRESE DATOS DEL PACIENTE </h2></center>
                     <center>
                     
                    <div class="dato">
                        <label for="dato">Id CLiente:</label>
                        <input class="basic-slide" type="text" id="Cliente" placeholder="Id del cliente" required >
                        
                    </div>
                    <br>
                    <div class="dato">
                        <label for="dato">Alias Mascota:</label>
                        <input class="basic-slide" type="text" id="Alias" maxlength="5" placeholder="Alias de la mascota" required>
                        
                    </div>
                    <br>
                    <div class="dato">
                        <label for="dato">Especie:</label>
                        <input class="basic-slide" type="text" id="Especie" value="Can" placeholder="Especie de la mascota" readonly>
                        
                    </div>
                    <br>
                    <div class="dato">
                            <label for="dato">Raza:</label>
                            <select id="raza" class="basic-slide">
                                <option>Pitbull</option>
                                <option>Pastor</option>
                                <option>Cocker</option>
                                <option>Pekines</option>
                            </select>
                    </div>
                     </center>
                </div>
                    
                
                <br>
                <center>
                    <div class="enviar">
                            <input type="hidden" id="accion" value="crear" >
                            <input class="boton" type="submit" id="botonEnviar" value="Agregar" > 
                            <script type="text/javascript" src="../controlador/app_mascota.js"></script>                          
                    </div>
                    <br>
                </center>    
            </form>

        </center>   
    </div>
    
</body>
    <br>

    <center>
    <button class="return" ><a href="/EXAMEN/index.php">Inicio</a></button>
    </center>


</html>

