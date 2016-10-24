$(document).ready(function(){
$('.registro-casoclinico').submit(function(e){
    var form=new FormData($(this)[0]);
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/insert_casoclinico",
            type: 'POST',
            dataType: 'json',
            data:form,
            processData: false,
            contentType: false,
            mimeType: 'multipart/form-data',
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado');
                    history.go(-1);
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        })
    })
    $('.registro-imagenes-cc').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/inser_img_cc",
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro Guardado');
                    location.reload();
                }
            },error:function(){
                msj_error_serve()
            }
        })  
    })
    $('body .del-casoclinico-img').on('click',function(e){
        var id=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR ESTE REGISTRO')){
            $.ajax({
                url: base_url+"admin/eliminar_img_cc",
                type: 'POST',
                dataType: 'json',
                data:{'id':id},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro..');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        $('#'+id).remove();
                        msj_success_noti('Registro eliminado')
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
    
    $('body .del-casoclinico').on('click',function(e){
        var id=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR ESTE REGISTRO Y LOS DATOS ASOCIADOS A ESTE?')){
            $.ajax({
                url: base_url+"admin/eliminar_casoclinico",
                type: 'POST',
                dataType: 'json',
                data:{'id':id},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro..');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        $('#'+id).remove();
                        msj_success_noti('Registro eliminado')
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
    $('.registro-preguntas').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/insert_preguntas",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado');
                    history.go(-1);
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        })
    })
    $('body .del-preguntas').on('click',function(e){
        var id=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR LA PREGUNTA Y LAS RESPUESTAS ASOCIADO A ESTA?')){
            $.ajax({
                url: base_url+"admin/eliminar_pregunta",
                type: 'POST',
                dataType: 'json',
                data:{'id':id},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro..');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        $('#'+id).remove();
                        msj_success_noti('Registro eliminado')
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
    $('.registro-respuestas').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/insert_respuestas",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado');
                    history.go(-1);
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        })
    })
    $('body .del-respuestas').on('click',function(e){
        var id=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR RESPUESTA?')){
            $.ajax({
                url: base_url+"admin/eliminar_respuesta",
                type: 'POST',
                dataType: 'json',
                data:{'id':id},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro..');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        $('#'+id).remove();
                        msj_success_noti('Registro eliminado')
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
    if($('input[name=accion]').val()=='edit'){
        $('#respuesta_valor').val($('#respuesta_valor').attr('data-value')).select2();
    }
    $('.footable').footable();
    $('body .eliminar-evaluacion').on('click',function(){
        var id=$(this).attr('data-id');
        if(confirm('¿ESTA SEGURO QUE DESEA ELIMINAR LA EVALUACIÓN DE ESTE MÉDICO?')){
            $.ajax({
                url: base_url+"admin/eliminar_evaluacion",
                type: 'POST',
                dataType: 'json',
                data:{'id':id},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro...');
                },success: function (data, textStatus, jqXHR) {
                    $('#'+id).remove();
                    msj_success_noti('Registro eliminado');
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
})