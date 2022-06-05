<?php

if($_POST["Accion"]==="crear"){
    require_once('../modelo/base.php'); 
    echo json_encode($_POST);
    $dato1=filter_var($_POST['ID_Cliente'],FILTER_SANITIZE_STRING);
    $dato2=filter_var($_POST['Especie'],FILTER_SANITIZE_STRING);
    $dato3=filter_var($_POST['Raza'],FILTER_SANITIZE_STRING);
    $dato4=filter_var($_POST['Alias'],FILTER_SANITIZE_STRING);

    try{
        $stmt=$conn->prepare("INSERT INTO paciente(id_cliente,alias,Especie,Raza) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss",$dato1,$dato4,$dato2,$dato3);
        $stmt->execute();

        if($stmt->affected_rows==1){
            $respuesta=array(
                'respuesta'=>'correcto',
                'datos'=>array(
                    'ID_cliente'=>$dato1,
                    'Especie'=>$dato2,
                    'Raza'=>$dato3,
                    'Alias'=>$dato4,
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