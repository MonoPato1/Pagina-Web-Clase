
function validarFormulario(event) {
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const telefono = document.getElementById('telefono').value.trim();
    const problema = document.getElementById('problema').value.trim();
    
    if (!nombre || !email || !telefono ||!problema) {
        event.preventDefault();
        alert("Debe rellenar todos los campos por favor.");
        return false;
    }
    
    return true;
}
