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
                                <label>Id Mascota: 
                                    <select id="ID_Mascota">
                                    <?php
                                    include("../modelo/base.php");
                                    $consulta= "SELECT * FROM paciente";
                                    $ejecutar= mysqli_query($conn,$consulta) or die(mysqli_error($conn));

                                    ?>
                                    
                                    <?php foreach ($ejecutar as $opciones):?>

                                        <option value="<?php echo $opciones['id_mascota'] ?> "><?php echo $opciones['id_mascota'] ?></option>    

                                    <?php endforeach ?>  

                                    </select>

                                </label>

                    <div class="dato">
                        <label for="dato">Fecha:</label>
                        <input class="basic-slide" type="date" id="fecha1">
                        
                    </div>
                    <br>
                    <div class="dato">
                        <label for="dato">Enfermedad:</label>
                        <input class="basic-slide" type="text" id="Enfermedad" placeholder="Enfermedad de la mascota" required>
                        
                    </div>
                    <br>
                    <div class="dato">
                        <label for="dato">Fecha Próxima:</label>
                        <input class="basic-slide" type="date" id="fecha2"  min="2021-01-01" max="2021-12-31">
                        
                    </div>
                    <br>

                    <div>
                               
                    </div>
                    </div>

                     </center>
                </div>
                    
                
                <br>
                <center>
                    <div class="enviar">
                            <input type="hidden" id="accion" value="crear" >
                            <input class="boton" type="submit" id="botonEnviar" value="Agregar" > 
                            <script type="text/javascript" src="../controlador/app_vacuna.js"></script>                          
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

