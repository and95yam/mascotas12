const formulario = document.querySelector('#ingresar');

EventListeners();

function EventListeners(){
    formulario.addEventListener('submit',leerform);
}

function leerform(e){
    e.preventDefault();

    const id_cli = document.querySelector('#Cliente').value,
    ali= document.querySelector('#Alias').value,
    esp= document.querySelector('#Especie').value,
    ra= document.querySelector('#raza').value,
    acc=document.querySelector('#accion').value;
   
    if(id_cli===''||ali===''||esp===''||ra===''){
        alert('Debe llenar todos los campos');
    }else{
        const llenarDatos = new FormData();
        llenarDatos.append('ID_Cliente',id_cli);
        llenarDatos.append('Alias',ali);
        llenarDatos.append('Especie',esp);
        llenarDatos.append('Raza',ra);
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
    xhr.open('POST','../modelo/ingresoM.php',true);
    xhr.onload=function(){
        if(this.status==200){
            console.log(xhr.responseText);
            const respuesta = xhr.responseText;
        }
    }
    xhr.send(llenarDatos);
}

