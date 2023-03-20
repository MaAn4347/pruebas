//arreglo que tiene las respuestas
let correctas=[2,2,3,1,3,2,1,3,3,1];

//arreglo donde se guardan las respuestas
let opcion_elegida=[];
let cantidad_correctas=0;

//funcion que toma el número de pregunta y el input elegido
function respuesta(num_pregunta,seleccionada){
    //guarda la respuesta
    opcion_elegida[num_pregunta]=seleccionada.value;
    //poner el blanco cuando se elige otra ocion
    id="p" + num_pregunta;
    labels=document.getElementById(id).childNodes;
    labels[3].style.backgroundColor="#FFFFFF";
    labels[5].style.backgroundColor="#FFFFFF";

    labels[7].style.backgroundColor="#FFFFFF";

    //se da color al label seleccionado
    seleccionada.parentNode.style.backgroundColor="#ed9c64";
}

//funcion que compara los arreglos para saber cuantas estuvieron correctas
function corregir(){
    cantidad_correctas=0;
    for(i=0; i<correctas.length;i++){
        if(correctas[i]==opcion_elegida[i]){
            cantidad_correctas++;
        }
    }
    document.getElementById("resultado").innerHTML=cantidad_correctas;
}

function reiniciar(){
    location.reload(true);
}