$(document).ready(function(e){
    $('input[name=usuario_user]').blur(function (e){
        var input=$(this);
        if(input.val()!=''){
            $.ajax({
                url: base_url+"login/check_user",
                dataType: 'json',
                type: 'POST',
                data:{'user':input.val()}
                ,beforeSend: function (xhr) {
                    msj_success_noti('Verificando disponibilidad de usuario');
                    $('input[type=submit]').attr('disabled',true);
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Nombre de usuario disponible')
                        $('input[type=submit]').removeAttr('disabled');
                    }else{
                        msj_error_noti('Nombre de usuario no disponible')
                        $('input[type=submit]').attr('disabled',true);
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
    $('.registrar-administrador').on('submit',function(e){
        e.preventDefault()
        if($('input[name=usuario_pass]').val()==$('input[name=usuario_pass_c]').val()){
            $.ajax({
                url: base_url+"admin/insert_administrador",
                type: 'POST',
                dataType: 'json',
                data:$(this).serialize(),
                beforeSend:function(){
                    msj_success_noti('Guardando registro...')
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        history.go(-1);
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_success_noti()
                }
            })
        }else{
            msj_error_noti('Las contraseñas escritas no coinciden');
        }
    })
    if($('input[name=accion]').val()=='edit'){
        $('input[name=usuario_user]').attr('disabled',true)
        $('input[type=password]').removeAttr('required')
    }
    $('.eliminar-admin').on('click',function(e){
        var admin=$(this).attr('data-admin');
        var usuario=$(this).attr('data-usuario');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/eliminar_administrador",
                type: 'POST',
                dataType: 'json',
                data: {'admin_id':admin,'usuario_id':usuario},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro...')
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro eliminado');
                        $('#'+admin).remove();
                    }
                },error:function(){
                    msj_error_serve();
                }
            })
        }
    })
    $('.mas-info').on('click',function(e){
        var user=$(this).attr('data-usuario');
        var rol=$(this).attr('data-rol');
        $.ajax({
            url: base_url+"admin/mas_info_history",
            type: 'POST',
            dataType: 'json',
            data:{'user':user,'rol':rol},
            beforeSend: function (xhr) {
                msj_success_noti('Obteniendo información')
            },
            success: function (data, textStatus, jqXHR) {
                bootbox.dialog({
                    title: 'Más información',
                    message: '<h5 class="text-left">'+data.msj+'</h5>',
                    closeButton: true,
                    buttons: {
                        success: {
                            label     : 'Aceptar',
                            className : 'back-imss btn btn-primary btn-cons'
                        } 
                    },onEscape : function() {}
                });
                //fa fa-times
                $('body .modal-dialog').css({'width':'30%','margin-top':'100px'});
                $('body .modal-body').addClass('text_25');
                $('body .modal-header').addClass('back-imss');
                $('.modal-title').css({
                    'color'      : 'white',
                    'text-align' : 'left'
                });
                $('.close').css({
                    'color'     : 'white',
                    'font-size' : 'x-large'
                });
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        })

    })
});