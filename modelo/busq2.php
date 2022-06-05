<?php
    if(isset($_GET['enviar'])){

        $busqueda = $_GET['busqueda'];
        $consulta = $conn->query("SELECT id_mascota, Raza FROM `paciente` WHERE id_mascota ='$busqueda'");
        while ($row = $consulta->fetch_array()){

            ?>
            <tr>
                <td><?php echo $row['id_mascota']?></td>
                <td><?php echo $row['Raza']?></td>
               
            
            </tr>
            <?php
            
        }
    }


 


    ?>