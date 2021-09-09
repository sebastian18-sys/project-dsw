var select = document.getElementById('pesoPaquete');
select.addEventListener('change', function() {
    var selectedOption = this.options[select.selectedIndex];
    console.log(selectedOption.value + ": " + selectedOption.text);
    if (selectedOption.text == "Menos de 5kg") {
        console.log("Entro al IF");
        document.getElementById('pesoSeleccionado').value = "12.50"
    } else if (selectedOption.text == "Menos de 10kg") {

    }
});