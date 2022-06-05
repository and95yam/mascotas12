<?php

if($_POST["Accion"]==="crear"){
    require_once('../modelo/base.php'); 
    echo json_encode($_POST);
    $dato1=filter_var($_POST['ID_Mascota'],FILTER_SANITIZE_STRING);
    $dato2=filter_var($_POST['fecha'],FILTER_SANITIZE_STRING);
    $dato3=filter_var($_POST['Enfermedad'],FILTER_SANITIZE_STRING);
    $dato4=filter_var($_POST['fecha_max'],FILTER_SANITIZE_STRING);

    try{
        $stmt=$conn->prepare("INSERT INTO vacunas(id_mascota,fecha,enfermedad,fecha_prox) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss",$dato1,$dato2,$dato3,$dato4);
        $stmt->execute();

        if($stmt->affected_rows==1){
            $respuesta=array(
                'respuesta'=>'correcto',
                'datos'=>array(
                    'ID_Mascota'=>$dato1,
                    'fecha1'=>$dato2,
                    'Enfermedad'=>$dato3,
                    'fecha2'=>$dato4,
                    'ID'=>$stmt->insert_id
                )
                );
        }
    }catch(Exception $e){
        $respuesta=array('error'=>$e->getMessage());
    }
}
echo json_encode($_POST);
?>