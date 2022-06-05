const formulario = document.querySelector('#ingresar');

EventListeners();

function EventListeners(){
    formulario.addEventListener('submit',leerform);
}

function leerform(e){
    e.preventDefault();

    const id_mas = document.querySelector('#ID_Mascota').value,
    f1= document.querySelector('#fecha1').value,
    enf= document.querySelector('#Enfermedad').value,
    f2= document.querySelector('#fecha2').value,
    acc=document.querySelector('#accion').value;
   
    if(id_mas===''||f1===''||enf===''||f2===''){
        alert('Debe llenar todos los campos');
    }else{
        const llenarDatos = new FormData();
        llenarDatos.append('ID_Mascota',id_mas);
        llenarDatos.append('fecha',f1);
        llenarDatos.append('Enfermedad',enf);
        llenarDatos.append('fecha_max',f2);
        llenarDatos.append('Accion',acc);

        console.log(...llenarDatos);

        if(acc==='crear'){
            insertarDB(llenarDatos);
            alert('Los Datos han sido ingresados'); 
            
        }else{
            alert('los Datos no se han ingresado');
        }
    }
}

function insertarDB(llenarDatos){
    const xhr = new XMLHttpRequest();
    xhr.open('POST','../modelo/ingresoV.php',true);
    xhr.onload=function(){
        if(this.status==200){
            console.log(xhr.responseText);
            const respuesta = xhr.responseText;
        }
    }
    xhr.send(llenarDatos);
}

