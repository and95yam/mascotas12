<?php
    if(isset($_GET['enviar'])){

        $busqueda = $_GET['busqueda'];
        $consulta = $conn->query("SELECT count(alias) , alias  FROM `paciente` WHERE alias like 'fifi'");
        while ($row = $consulta->fetch_array()){
            ?>
            <label>
            <?php echo $row['count(alias)']?>
            </label>
            

           <?php
        }
    }


 


    ?>