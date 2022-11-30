function cargarProvincias() {
    var array = ["CTGI","CTDMA","CDHC"];
    array.sort();
    addOptions("centro", array);
}


//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (provincia in array) {
        var opcion = document.createElement("option");
        opcion.text = array[provincia];
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[provincia].toLowerCase()
        selector.add(opcion);
    }
}



function cargarPueblos() {
    // Objeto de provincias con pueblos
    var listaPueblos = {
      cantabria: ["Laredo", "Gama", "Solares", "Castillo", "Santander"],
      asturias: ["Langreo", "Villaviciosa", "Oviedo", "Gijon", "Covadonga"],
      galicia: ["Tui", "Cambados", "Redondella", "Porriño", "Ogrove"],
      andalucia: ["Dos Hermanas", "Écija", "Algeciras", "Marbella", "Sevilla"],
      extremadura: ["Caceres", "Badajoz", "Plasencia", "Zafra", "Merida"]
    }
    
    var provincias = document.getElementById('provincia')
    var pueblos = document.getElementById('pueblo')
    var provinciaSeleccionada = provincias.value
    
    // Se limpian los pueblos
    pueblos.innerHTML = '<option value="">Seleccione un número de parqueadero...</option>'
    
    if(provinciaSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
      provinciaSeleccionada.sort()
    
      // Insertamos los pueblos
      provinciaSeleccionada.forEach(function(pueblo){
        let opcion = document.createElement('option')
        opcion.value = pueblo
        opcion.text = pueblo
        pueblos.add(opcion)
      });
    }
    
  }
  
 // Iniciar la carga de provincias solo para comprobar que funciona
cargarProvincias();