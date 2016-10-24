$(document).ready(function (){
    $('.loading-data').addClass('hide');
    $('.table-data').removeClass('hide');
    
    $.ajax({
        url: base_url+"inicio/get_estados",
        dataType: 'json',
        success: function (data, textStatus, jqXHR) {
            $('#estado_id').html(data['optionV2'])
            $('#estado_id').val($('#estado_id').attr('data-id')).select2();
        },error: function (jqXHR, textStatus, errorThrown) {
            
        }
    })
    $('.registro-delegados').submit(function (e){
        e.preventDefault()
        $.ajax({
            url: base_url+"admin/insert_delegados",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro..');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado.');
                    setTimeout(function (){
                        location.replace(base_url+'admin/delegados_comisionados')
                    },1000);
                }
            },error:function (){
                msj_error_serve()
            }
        })
    })
    $('body').on('click','.delete-del-com',function (){
        var el=$(this).attr('data-id');
        if(confirm('¿Desea eliminar este registro?')){
            $.ajax({
                url: base_url+"admin/delete_delegado",
                dataType: 'json',
                type: 'POST',
                data:{'id':el},
                success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro eliminado.')
                        $('#'+el).remove();
                    }
                },error:function (){
                    msj_error_serve();
                }
            })
        }
    })
})

