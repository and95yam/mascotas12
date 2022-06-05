<?php
    if(isset($_GET['enviar'])){

        $busqueda = $_GET['busqueda'];
        $consulta = $conn->query("SELECT paciente.id_mascota, paciente.id_cliente,vacunas.fecha_prox from paciente 
        inner JOIN vacunas on vacunas.id_mascota = paciente.id_mascota
        where paciente.id_mascota like '%$busqueda%';");
        while ($row = $consulta->fetch_array()){

            ?>
            <tr>
                <td><?php echo $row['id_mascota']?></td>
                <td><?php echo $row['id_cliente']?></td>
                <td><?php echo $row['fecha_prox']?></td>
            
            </tr>
            <?php
        }
    }


 


    ?>