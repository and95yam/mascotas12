<?php include '../modelo/base.php';?>

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
        <center><h2>BUSCAR Y LISTAR </h2></center><BR>

        <CENTER>
            <form action="" method="get" autocomplete="off">
                    <input class="basic-slides" type="text" name="busqueda" placeholder="Ingrese el id de la mascota"><br>
                    <input class="basic-slides" type="submit" name="enviar" value="Buscar"><BR>

                   
            </form>
        </CENTER>

                <center>
                    <div class="listado">
                        

                        <center>
                            <table class="lista-mostrar" id="lista-mostrar">
                                <thead class="head">
                                    <tr>
                                        <th>ID Mascota</th>
                                        <th>ID Cliente</th>
                                        <th>Fecha Proxima</th>
                                      
                                    </tr>    
                                        
                                </thead>
                                <tbody>
                                    <?php include("../modelo/busq1.php");?>
                                </tbody>
                            </table>
                        </center>
                    </div>
            </center>
</div>
    


    
    
</body>
</html>