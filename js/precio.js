var select = document.getElementById('pesoPaquete');
select.addEventListener('change', function() {
    var selectedOption = this.options[select.selectedIndex];
    console.log(selectedOption.value + ": " + selectedOption.text);
    if (selectedOption.text == "Menos de 5kg") {
        console.log("Entro al IF");
        document.getElementById('pesoSeleccionado').value = "12.50";
    } else if (selectedOption.text == "Menos de 10kg") {
        document.getElementById('pesoSeleccionado').value = "21.00";
    } else if (selectedOption.text == "Menos de 20kg") {
        document.getElementById('pesoSeleccionado').value = "40.00";
    } else if (selectedOption.text == "Más de 20kg") {
        document.getElementById('pesoSeleccionado').value = "60.50";
    } else {
        document.getElementById('pesoSeleccionado').value = "";
    }
});