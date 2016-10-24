$(document).ready(function(e){
    $('.registro-config').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/insert_config_registro",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado');
                    setTimeout(function(){
                        location.href=base_url+'admin/configuracion_registro';
                    },1000)
                }
            },error:function (e){
                msj_error_noti(e);
                console.log(e)
            }
        })
    })
    $('.eliminar_conf').click(function(){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR ESTE REGISTRO Y LOS DATOS ASOCIADOS A ELLO?')){
            $.ajax({
                url: base_url+"admin/eliminar_conf",
                type: 'POST',
                dataType: 'json',
                data:{'id':el},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro...');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro eliminado');
                        $('#'+el).remove()
                    }
                },error:function (e){
                    msj_error_noti(e)
                }
            })
        }
    })
})