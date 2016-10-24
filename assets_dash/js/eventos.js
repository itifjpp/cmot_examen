$(document).ready(function (){
    $('.fa-trash-o').click(function (){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/delete_evento",
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
    $('#registro-evento').submit(function (e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/guardar_evento",
            dataType: 'json',
            type: 'POST',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando...')
            },success: function (data, textStatus, jqXHR) {
                console.log(data);
                if(data['accion']=='1'){
                    location.href=base_url+'admin/eventos';
                }else{
                    msj_error_noti('Error al guardar el registro');
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_noti('Error al guardar el registro');
            }
        })
    })
    $('input[name=fecha_termino_radio]').on('click',function(e){
        if($(this).val()=='No'){
            $('.fecha-inicio').removeClass('col-md-12').addClass('col-md-6');
            $('.fecha-termino').removeClass('hide');
        }else{
            $('.fecha-inicio').addClass('col-md-12').removeClass('col-md-6')
            $('.fecha-termino').addClass('hide');
        }
        
    })
    $('input[name=evento_hora]').on('click',function(){
        if($(this).val()=='Si'){
            $('.form-horarios').removeClass('hide');
        }else{
            $('.form-horarios').addClass('hide');
        }
    })
    if($('input[name=evento_fecha_termino]').val()!=''){
        $('#fecha_termino_radio_no').attr('checked',true)
        $('.fecha-inicio').removeClass('col-md-12').addClass('col-md-6');
        $('.fecha-termino').removeClass('hide');
    }
    if($('input[name=evento_hora_inicio]').val()!=''){
        $('#horario_eventos_si').attr('checked',true)
        $('.form-horarios').removeClass('hide');
    }
    if($("#filename").val()!=''){
        $('.html5imageupload').css({
            'background':'url('+base_url+'assets/img/eventos/'+$("#filename").val()+')',
            'background-size':'cover',
            'background-position':'center'
        })
    }
})
