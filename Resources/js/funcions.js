/* const nombre = document.getElementById('nombre');
const email = document.getElementById('email');
const contraseña = document.getElementById('contraseña');
const telefono = document.getElementById('telefono');
const codigo_postal = document.getElementById('codigo_postal');
const direccion = document.getElementById('direccion');
const poblacion = document.getElementById('poblacion');
const error = document.getElementById('error');

function enviarFormulario() {
    console.log('Enviando formulario...');

    var mensajesError = [];

    if (nombre.value === null || nombre.value === '') {
        mensajesError.push('Ingresa tu nombre');
    }

    if (email.value === null || email.value === '') {
        mensajesError.push('Ingresa tu email');
    }

    if (contraseña.value === null || contraseña.value === '') {
        mensajesError.push('Ingresa tu contraseña');
    }

    if (telefono.value === null || telefono.value === '') {
        mensajesError.push('Ingresa tu telefono');
    }

    if (codigo_postal.value === null || codigo_postal.value === '') {
        mensajesError.push('Ingresa tu codigo postal');
    }

    if (direccion.value === null || direccion.value === '') {
        mensajesError.push('Ingresa tu direccion');
    }

    if (poblacion.value === null || poblacion.value === '') {
        mensajesError.push('Ingresa tu poblacion');
    }

    error.innerHTML = mensajesError.join(', ');

    return false;
} */

$(document).ready(function() {
    $('.dropdown-toggle').click(function() {
        $('.dropdown-menu').toggle();
    });
});

window.onload = function() {
    var player = document.getElementById('musicPlayer');
    player.play();
    player.pause();
}


function musica() {
    document.getElementById('musicPlayer').play();
}