$(document).ready(function(){

    $('#send').click(function(){

        var errors = '';
        if( $('#parents').val() == '' ){
            errors += '<p>Escriba un nombre</p>';
            $('#parents').css("border-bottom-color", "#F14B4B")
        } else{
            $('#parents').css("border-bottom-color", "#d1d1d1")
        }
        if( $('#email').val() == '' ){
            errors += '<p>Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        if( $('#message').val() == '' ){
            errors += '<p>Escriba un mensaje</p>';
            $('#message').css("border-bottom-color", "#F14B4B")
        } else{
            $('#message').css("border-bottom-color", "#d1d1d1")
        }
        if( errors == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        errors+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
