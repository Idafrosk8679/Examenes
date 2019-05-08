function validarFormulario() {

    var txtNombre = document.getElementById('nombre').value;
    var txtApellidos = document.getElementById('apellidos').value;
    var txtPrecioHora = document.getElementById('precio_hora').value;

    //Nombre
    if (txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)) {
        alert('ERROR: Debe ingresar un nombre ');
        return false;
    }

    // Apellidos
    if (txtApellidos == null || txtApellidos.length == 0 || /^\s+$/.test(txtApellidos)) {
        alert('ERROR: Debe ingresar un/os apellido/s');
        return false;
    }

    // Horas
    if (txtPrecioHora.length == 0 || isNaN(txtPrecioHora)) {
        alert('ERROR: Debe ingresar un precio/hora');
        return false;
    };
}

