$(document).ready(function() {
    //Jquery anterior
    $("#slide_nav_button").click(function() {
        $('#slide_menu').animate({
            width: 'toggle'
        }, 300);
    });
    // Formulario

    /* validacion: https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/blur
    https://developer.mozilla.org/en-US/docs/Web/API/Element/blur_event */
    
     $('#mensaje-error').hide();

    $("#email").blur(function() {
        validarCampoEmail(this);
    }); 

    // Listener para validar envío de formulario
    $("#form").submit(function(event) {

        validarCampoEmail($('#email'));

        if ($(".mensaje-error").toArray().length > 0) {
            $('#mensaje-error').show();
            event.preventDefault();
        } else {
            $('#mensaje-error').hide();
        }
    });

    // Listener para validar campo telefono
    $("#telefono").keypress(function(event) {
        const largoIngresado = $(this).val().toString().length;

        return validarSoloNumero(event, largoIngresado);
    });
});