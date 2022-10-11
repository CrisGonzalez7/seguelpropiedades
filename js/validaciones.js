/**
 * Funcion que valida el campo email
 * 
 * @param campoEmail a validar
 */
function validarCampoEmail(campoEmail) {
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    if(caract.test($(campoEmail).val()) == false) {
        $(campoEmail).addClass('error');
    } else {
        $(campoEmail).removeClass('error');
    }
}

/**
 * Valida que el caracter ingresado sea numero, además acepta la tecla borrar
 * @param evt evento a validar
 * @returns si la tecla es un caracter valido
 */
function validarSoloNumero(evt, largoIngresado){
    // obtiene el codigo de la tecla presionada
    var code = (evt.which) ? evt.which : evt.keyCode;

    if (largoIngresado === 0 && code === 43) {// Si el campo no tiene ningún valor ingresado permite ingreso de signo más (43)
      return true;
    } else if (code===8) { // codigo ASCII que representa borrar (8)
      return true;
    } else if (code>=48 && code<=57) { // codigos ACSII que representa las teclas del 1 al 9
      return true;
    } else { // other keys.
      return false;
    }
}