let corrctas = ["1", "2"]; //array que guarda las respuestas correctas

let opcion_elegidas = []; //array que guarda las respuestas elejidas por el usuario

let cantidad_correctas = 0;

//funcion que toma el num de pregunta y el input elejido de esa pregunta
function respuesta(num_pregunta, seleccionada) {
    //guardado de la respuesta elejida
    console.log(seleccionada.value);
    opcion_elegidas[num_pregunta] = seleccionada.value;

    id = "p" + num_pregunta;

    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor = "white";
    labels[3].style.color = "black";
    labels[5].style.backgroundColor = "white";
    labels[5].style.color = "black";
    labels[7].style.backgroundColor = "white";
    labels[7].style.color = "black";
    labels[9].style.backgroundColor = "white";
    labels[9].style.color = "black";

    seleccionada.parentNode.style.backgroundColor = "#061D5B";
    seleccionada.parentNode.style.color = "white";
}

function corregir() {
    cantidad_correctas = 0;
    for (let i = 0; i < corrctas.length; i++) {
        if (corrctas[i] == opcion_elegidas[i]) {
            cantidad_correctas++;
        }
    }
    document.getElementById("resultado").innerHTML = cantidad_correctas;
}

function certificado() {
    if (cantidad_correctas == 2) {
        return true;
        re;
    }
    return false;
}
