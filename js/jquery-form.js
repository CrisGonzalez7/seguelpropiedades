$(document).ready(function() {
    //Jquery anterior
    $("#slide_nav_button").click(function() {
        $('#slide_menu').animate({
            width: 'toggle'
        }, 300);
    });
    
    $('#mensaje-error').hide();

    //validacion: https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/blur
    //https://developer.mozilla.org/en-US/docs/Web/API/Element/blur_event
    $("#email").blur(function() {
        validarCampoEmail(this);
    });

    // Listener para validar envío de formulario
    $("#form").submit(function(event) {

        validarCampoEmail($('#email'));

        if ($(".error").toArray().length > 0) {
            $('#mensaje-error').show();
            event.preventDefault();
        } else {
            $('#mensaje-error').hide();
        }
    });
});