<?php  include '../modelo/base.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="styleSheet" href="../estilo.css">
</head>
<body>
    <div class="datos">
        <center><h2>MASCOTA Y SU RAZA </h2></center><BR>
        <center>
            
            <form action="" method="get" autocomplete="off">
                <br>
                <input type="text" name="busqueda" placeholder="Ingrese el codigo de su mascota"> <br>
                <input type="submit" name="enviar" value="Buscar"> <br>
                <br>

            </form>
        </center>
        
    </div>

    <center>
                    <div class="listado">
                        

                        <center>
                            <table class="lista-mostrar" id="lista-mostrar">
                                <thead class="head">
                                    <tr>
                                        <th>ID Mascota</th>
                                        <th>Raza</th>
                                       
                                      
                                    </tr>    
                                        
                                </thead>
                                <tbody>
                                    <?php include("../modelo/busq2.php");?>
                                </tbody>
                            </table>
                        </center>
                    </div>
            </center>


   
    
</body>
</html>