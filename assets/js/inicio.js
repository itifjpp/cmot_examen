$(document).ready(function (){
    
    $('.page-loading').addClass('hide');
    $('.page-load').removeClass('hide');
    $('.load-page-header').css('display','block')


    $('.form-login').submit(function (e){
        var form=$(this);
        e.preventDefault();
        $.ajax({
            url: base_url+"login/acceder",
            type: 'POST',
            dataType: 'json',
            data:$('.form-login').serialize(),
            beforeSend: function (xhr) {
                form.find('input').attr('readonly',true);
                form.find('button').attr('disabled',true);
                form.find('.fa-spinner').removeClass('hidden');
            },success: function (data) {
                console.log(data)
                form.find('input').attr('readonly',false);
                form.find('button').attr('disabled',false);
                form.find('.fa-spinner').addClass('hidden');
                if(data.accion==1){
                    if(data.rol_id=='Medico'){
                        location.href=base_url+'inicio/examen';
                    }else{
                        location.href=base_url+'admin';
                    }
                }if(data.accion==2){
                    msj_error_noti('Usuario y/o contraseña incorrectos')
                }
            },error: function (xhr) {
                console.log(xhr)
            }
        })
    })
    function  msj(titulo,msj){
       bootbox.dialog({
                title: titulo,
                message:'<div class="row ">'+
                            '<div class="col-sm-12">'+
                                '<h5 class="text-center">'+msj+'<br><br>info@cmot.org.mx</h5>'+
                            '</div>'+
                        '</div>',
                buttons: {}
                ,onEscape : function() {}
            });
            //fa fa-times

            $('body .modal-body').addClass('text_25');
            $('.modal-title').css({
                'color'      : 'white',
                'text-align' : 'left'
            });
            $('.modal-dialog').css({
                'margin-top':'130px',
                //'width':'40%'
            })
            $('.modal-header').css('background','#02344A')
            $('.close').css({
                'color'     : 'white',
                'font-size' : 'x-large'
            });
    }
//    var click=0;
//    $('.click-reglementos').on('click',function(e){
//        click=click+1;
//        if(click==1){
//            $(this).find('.listar-integrantes').removeClass('hide')
//        }else{
//            $(this).find('.listar-integrantes').addClass('hide')
//            click=0;
//        }
//    })
})