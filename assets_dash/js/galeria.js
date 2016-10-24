$(document).ready(function(e){
    $('.registrar-galeria').on('submit',function(e){
        e.preventDefault();
        if($('input[name=galeria_img]').val()!=''){
            $.ajax({
                url: base_url+"admin/insert_galeria",
                type: 'POST',
                dataType: 'json',
                data:$(this).serialize(),
                beforeSend: function (xhr) {
                    msj_success_noti('Guardando registro');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        history.go(-1);
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }else{
            msj_error_noti('Seleccionar imagen');
        }
    })
    if($("#filename").val()!=''){
        $('.html5imageupload').css({
            'background':'url('+base_url+'assets/img/galeria/'+$("#filename").val()+')',
            'background-size':'cover',
            'background-position':'center'
        })
    }    
    $('.del-galeria').on('click',function(e){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/eliminar_galeria",
                type: 'POST',
                dataType: 'json',
                data:{'id':el},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro eliminado');
                        $('#'+el).remove();
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    });
    $('.btn-cons-add').on('click',function(e){
        bootbox.dialog({
            title: 'Agregar',
            message:'<div class="row">'+
                        '<div class="col-sm-12">'+
                            '<div class="form-group">'+
                                '<label>Categoría</label>'+
                                '<input type="text" id="categoria_nombre" class="form-control">'+
                            '</div><!-- /.form-group -->'+
                        '</div>'+
                    '</div>',
            buttons: {
                    success: {
                        label: 'Guardar',
                        className: 'btn btn-primary back-imss',
                        callback: function(res) {
                            var categoria_nombre=$('#categoria_nombre').val();      
                            if(categoria_nombre!=''){
                                $.ajax({
                                    url: base_url+"admin/insert_categoria",
                                    type: 'POST',
                                    dataType: 'json',
                                    data:{'categoria_nombre':categoria_nombre}
                                    ,beforeSend: function (xhr) {
                                        msj_success_noti('Guardando cambios...');
                                    },success: function (data, textStatus, jqXHR) {
                                        if(data.accion=='1'){
                                            msj_success_noti('Cambios Guardados');
                                            setTimeout(function(){
                                                location.reload();
                                            },1000)
                                        }
                                    },error: function (e) {
                                        msj_error_noti(e)
                                    }
                                })
                            }
                        }
                    }
                }
            ,onEscape : function() {}
        });
        //fa fa-times
        $('.modal-dialog').css('width','25%')
        $('body .modal-body').addClass('text_25');
        $('.modal-title').css({
            'color'      : 'white',
            'text-align' : 'left'
        });
        $('.modal-dialog').css('margin-top','90px')
        $('.modal-header').css('background','#02344A')
        $('.close').css({
            'color'     : 'white',
            'font-size' : 'x-large'
        });
      
    })
    $('.del-categoria').on('click',function(e){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/eliminar_categoria",
                type: 'POST',
                dataType: 'json',
                data:{'id':el},
                beforeSend: function (xhr) {
                    
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        $('#'+el).remove();
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
    $.ajax({
        url: base_url+"admin/get_categorias",
        dataType: 'json',
        success: function (data, textStatus, jqXHR) {
            $('#galeria_categoria').html(data.option);
            if($('input[name=accion]').val()=='edit'){
                var value=$('input[name=galeria_value]').val().split(',');
                $('#galeria_categoria').select2('val',value).select2();
            }
            
        }
    })
    if($('input[name=accion]').val()=='edit'){

    }
   // $('body table ,.footable').footable();
})

