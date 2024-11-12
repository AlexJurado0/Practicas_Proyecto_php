
// Mostrar una alerta si el parámetro 'error=1' está en la URL

function alerta_login() {
    if (window.location.search.includes('error=1')) {
        alert('Usuario o contraseña incorrectos.');
    }
}
