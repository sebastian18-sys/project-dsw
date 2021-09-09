formulario = document.querySelector('#formulario-tarjeta');
// select mes

for (let i = 1; i <= 12; i++) {
    let opcion = document.createElement('option'); //permite crear etiquetas

    if (i > 9 && i < 13) {
        opcion.value = i;
        opcion.innerText = i;
    } else {
        opcion.value = "0" + i;
        opcion.innerText = "0" + i;
    }

    formulario.selectMes.appendChild(opcion);
}

// select año
const yearnow = new Date().getFullYear();
for (let i = yearnow; i < yearnow + 10; i++) {
    let opcion = document.createElement('option'); //permite crear etiquetas
    opcion.value = i;
    opcion.innerText = i;
    formulario.selectAño.appendChild(opcion);
}

//input numero tarjeta
formulario.inputNumero.addEventListener('keyup', (e) => {
    let valorInput = e.target.value; //detecta cada ingreso en teclado
    formulario.inputNumero.value = valorInput
        //elimina espacios en blanco
        .replace(/\s/g, '')
        //elimina letras
        .replace(/\D/g, '')
        //espacio cada 4 numeros
        .replace(/([0-9]{4})/g, '$1 ')
        .trim();
})

//ccv
formulario.inputCVV.addEventListener('keyup', (e) => {
    let valorCvv = e.target.value; //detecta cada ingreso en teclado
    formulario.inputCVV.value = valorCvv
        //elimina espacios en blanco
        .replace(/\s/g, '')
        //elimina letras
        .replace(/\D/g, '')
        .trim();
})

//Peso