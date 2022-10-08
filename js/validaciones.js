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