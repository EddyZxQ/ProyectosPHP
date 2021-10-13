

btnAbrirArchivo = document.getElementById('abrir');
btnGuardarComo = document.getElementById('guardarComo')
btnCodificar = document.getElementById('codificar');
btnDecodificar = document.getElementById('decodificar');


ventanaEmergenteAbrir = document.getElementById('ventanaEmergenteAbrir');
ventanaEmergenteGuardarComo = document.getElementById('ventanaEmergenteGuardarComo');
ventanaEmergenteCodificar = document.getElementById('ventanaEmergenteCodificar');
ventanaEmergenteDecodificar = document.getElementById('ventanaEmergenteDecodificar');

btnAbrirArchivo.onclick = function () {
    ventanaEmergenteAbrir.classList.toggle('oculto');
}

btnGuardarComo.onclick = function () {
    ventanaEmergenteGuardarComo.classList.toggle('oculto');
}

btnGuardarComo.onclick = function () {
    ventanaEmergenteGuardarComo.classList.toggle('oculto');
}



//Archivo Codificar




btnCodificar.onclick = function (){
    ventanaEmergenteCodificar.classList.toggle('oculto');
}

btnDecodificar.onclick = function (){
    ventanaEmergenteDecodificar.classList.toggle('oculto');
}
