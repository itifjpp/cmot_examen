$(document).ready(function(){
    $('.btn-add-rc').on('click',function(e){
        add_reglementos_comisiones({
            'reglementos_comisiones_id':0,
            'reglementos_comisiones_tipo':'',
            'reglementos_comisiones_nombre':'',
            'accion':'add'
        });
    })
    $('.icono-edit').on('click',function(e){
        $.ajax({
            url: base_url+"admin/get_reglementos_comisiones",
            type: 'POST',
            dataType: 'json',
            data:{'id':$(this).attr('data-id')},
            beforeSend: function (xhr) {
                msj_success_noti('Obteniendo datos');
            },success: function (data, textStatus, jqXHR) {
                add_reglementos_comisiones({
                    'reglementos_comisiones_id':data[0]['reglementos_comisiones_nombre'],
                    'reglementos_comisiones_tipo':data[0]['reglementos_comisiones_tipo'],
                    'reglementos_comisiones_nombre':data[0]['reglementos_comisiones_nombre'],
                    'accion':'edit'                   
                })
            },error: function (jqXHR, textStatus, errorThrown) {
                
            }
        })
    })
    $('.btn-add-personal').on('click',function(e){
        add_personal({
            'rc_personal_id':0,
            'rc_personal_nombre':'',
            'reglementos_comisiones_id':$(this).attr('data-rc'),
            'accion':'add'
        });
    })
    $('.icono-edit-personal').on('click',function(e){
        $.ajax({
            url: base_url+"admin/get_reglementos_comisiones_personal",
            type: 'POST',
            dataType: 'json',
            data:{'id':$(this).attr('data-id')},
            beforeSend: function (xhr) {
                msj_success_noti('Obteniendo datos');
            },success: function (data, textStatus, jqXHR) {
                add_personal({
                    'rc_personal_id':data[0]['rc_personal_id'],
                    'rc_personal_nombre':data[0]['rc_personal_nombre'],
                    'reglementos_comisiones_id':data[0]['reglementos_comisiones_id'],
                    'accion':'edit'                   
                })
            },error: function (jqXHR, textStatus, errorThrown) {
                
            }
        })
    })
    function add_reglementos_comisiones(datos){
        bootbox.dialog({
            title: 'Reglementos & Comisiones',
            message:'<div class="row">'+
                        '<div class="col-sm-12">'+
                            '<div class="form-group">'+
                                '<label>Tipo</label>'+
                                '<select class="select2 form-control" id="reglementos_comisiones_tipo">'+
                                    '<option value="Reglementos">Reglementos</option>'+
                                    '<option value="Comisiones">Comisiones</option>'+
                                '</select>'+
                            '</div><!-- /.form-group -->'+
                            '<div class="form-group">'+
                                '<label>Nombre</label>'+
                                '<input type="text" id="reglementos_comisiones_nombre" value="'+datos.reglementos_comisiones_nombre+'" class="form-control">'+
                            '</div><!-- /.form-group -->'+
                        '</div>'+
                    '</div>',
            buttons: {
                    success: {
                        label: 'Guardar',
                        className: 'btn btn-primary back-imss',
                        callback: function(res) {
                            var reglementos_comisiones_nombre=$('#reglementos_comisiones_nombre').val();
                            if(reglementos_comisiones_nombre!=''){
                                $.ajax({
                                    url: base_url+"admin/reglementos_comisiones_add",
                                    type: 'POST',
                                    dataType: 'json',
                                    data:{
                                        'reglementos_comisiones_id':datos.reglementos_comisiones_id,
                                        'reglementos_comisiones_tipo':$('#reglementos_comisiones_tipo').val(),
                                        'reglementos_comisiones_nombre':$('#reglementos_comisiones_nombre').val(),
                                        'accion':datos.accion
                                    },beforeSend: function (xhr) {
                                        msj_success_noti('Guardando registro...');
                                    },success: function (data, textStatus, jqXHR) {
                                        if(data.accion=='1'){
                                            msj_success_noti('Registro guardado');
                                            location.reload();
                                        }
                                    },error: function (jqXHR, textStatus, errorThrown) {
                                        msj_error_serve()
                                    }
                                })
                            }
                        }
                    }
                }
            ,onEscape : function() {}
        });
        $('.select2').select2();
        $('body #reglementos_comisiones_tipo').val(datos.reglementos_comisiones_tipo).select2();
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
    }
    function add_personal(datos){
        bootbox.dialog({
            title: 'Personal',
            message:'<div class="row">'+
                        '<div class="col-sm-12">'+
                            '<div class="form-group">'+
                                '<label>Nombre</label>'+
                                '<input type="text" id="rc_personal_nombre" value="'+datos.rc_personal_nombre+'" class="form-control">'+
                            '</div><!-- /.form-group -->'+
                        '</div>'+
                    '</div>',
            buttons: {
                    success: {
                        label: 'Guardar',
                        className: 'btn btn-primary back-imss',
                        callback: function(res) {
                            var rc_personal_nombre=$('#rc_personal_nombre').val();
                            if(rc_personal_nombre!=''){
                                $.ajax({
                                    url: base_url+"admin/reglementos_comisiones_personal",
                                    type: 'POST',
                                    dataType: 'json',
                                    data:{
                                        'rc_personal_id':datos.rc_personal_id,
                                        'rc_personal_nombre':$('#rc_personal_nombre').val(),
                                        'reglementos_comisiones_id':datos.reglementos_comisiones_id,
                                        'accion':datos.accion
                                    },beforeSend: function (xhr) {
                                        msj_success_noti('Guardando registro...');
                                    },success: function (data, textStatus, jqXHR) {
                                        if(data.accion=='1'){
                                            msj_success_noti('Registro guardado');
                                            location.reload();
                                        }
                                    },error: function (jqXHR, textStatus, errorThrown) {
                                        msj_error_serve()
                                    }
                                })
                            }
                        }
                    }
                }
            ,onEscape : function() {}
        });
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
    }
    $('.eliminar-rc-personal').on('click',function(){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/eliminar_rc_personal",
                type: 'POST',
                dataType: 'json',
                data:{'id':el},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro...');
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
    })
    $('.eliminar-rc').on('click',function(){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/eliminar_rc",
                type: 'POST',
                dataType: 'json',
                data:{'id':el},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro...');
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
    })
})