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
            <center><h2>Mascotas que se llaman: "fifi"</h2></center><BR>
               <center>
                    <form action="" method="get" autocomplete="off">

                    <input type="hidden" name="busqueda" > 
                    <input type="submit" name="enviar" value="Buscar"> 
                    <label for="dato"><?php include("../modelo/busqfifi.php");?> </label>
                    </form>
                </center>
               

    </div>

                


    
    
</body>
</html>