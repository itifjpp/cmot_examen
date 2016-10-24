$(document).ready(function (){
    $('.del-curso').click(function (){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/delete_curso",
                type: 'POST',
                dataType: 'json',
                data:{'id':el},
                success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro eliminado');
                        $('#'+el).remove();
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
    $('#registro-curso').submit(function (e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/guardar_curso",
            dataType: 'json',
            type: 'POST',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando...')
            },success: function (data, textStatus, jqXHR) {
                console.log(data);
                if(data['accion']=='1'){
                    location.href=base_url+'admin/cursos';
                }else{
                    msj_error_noti('Error al guardar el registro');
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_noti('Error al guardar el registro');
            }
        })
    })
    if($("#filename").val()!=''){
        $('.html5imageupload').css({
            'background':'url('+base_url+'assets/img/cursos/'+$("#filename").val()+')',
            'background-size':'cover',
            'background-position':'center'
        })
    }
})
