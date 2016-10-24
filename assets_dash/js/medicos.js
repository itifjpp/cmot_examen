$(document).ready(function (e){
    
    $('.loading-data').addClass('hide');
    $('.table-data').removeClass('hide');
    $('#registro-pago').submit(function (e){
        e.preventDefault()
        var form=new FormData($(this)[0]);
        $.ajax({
            url: base_url+"admin/registrar_pago_ventanilla",
            dataType: 'json',
            data:form,
            type: 'POST',
            processData: false,
            contentType: false,
            mimeType: 'multipart/form-data',
            beforeSend: function (xhr) {
                
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro de pago realizado correctamente.');
                    setTimeout(function (){
                        location.replace(base_url+'admin/medicos_tipo?t=p');
                    },1000)
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve();
            }
        })
    })
    $('body').on('click','.cambiar-pass',function (){
        var el=$(this).attr('data-id');
        bootbox.dialog({
            title: 'Cambiar contraseña',
            message:'<div class="row">'+
                        '<div class="col-sm-12">'+
                            '<div class="form-group">'+
                                '<label>Nueva contraseña</label>'+
                                '<input type="password" id="usuario_pass" class="form-control">'+
                            '</div><!-- /.form-group -->'+
                            '<div class="form-group">'+
                                '<label>Confirmar contraseña</label>'+
                                '<input type="password" id="usuario_pass_c" class="form-control">'+
                            '</div><!-- /.form-group -->'+
                        '</div>'+
                    '</div>',
            buttons: {
                    success: {
                        label: 'Guardar',
                        className: 'btn btn-primary back-imss',
                        callback: function(res) {
                            var usuario_pass=$('#usuario_pass').val();
                            var usuario_pass_c=$('#usuario_pass_c').val();
                            if(usuario_pass_c!=''){
                                if(usuario_pass==usuario_pass_c){
                                    $.ajax({
                                        url: base_url+"admin/update_pass",
                                        type: 'POST',
                                        dataType: 'json',
                                        data:{
                                            'usuario_id':el,
                                            'usuario_pass':usuario_pass_c
                                        },beforeSend: function (xhr) {
                                            msj_success_noti('Guardando cambios...');
                                        },success: function (data, textStatus, jqXHR) {
                                            if(data.accion=='1'){
                                                msj_success_noti('Contraseña cambiada correctamente');
                                            }
                                        },error: function (jqXHR, textStatus, errorThrown) {
                                            msj_error_serve()
                                        }
                                    })
                                }else{
                                    msj_error_noti('Las contraseñas escritas no coinciden');
                                }
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
    $('.registro-sinodal').submit(function (e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/asignar_sinodal",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando cambios...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Cambios guardados.');
                    setTimeout(function (){
                        location.href=base_url+'admin/medicos_tipo?t=p';
                    },1000)
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        })
    })
    $('.certificar-medico').click(function (e){
        var el =$(this).attr('data-id');
        if(confirm('PARA CERTIFICAR UN MÉDICO DEBE TENER EN CUENTA QUE DEBIO CUMPLIR CON TODO LOS DATOS REQUERIDOS PARA EL PROCESO DE CERTIFICACÍON\n\n¿DESEA REALIZAR EL PROCESO DE CERTIFICACÍON PARA ESTE MÉDICO?')){
            $.ajax({
                url: base_url+"admin/certificar_medico",
                dataType: 'json',
                type: 'POST',
                data:{'id':el,'fecha':get_fecha_actual()},
                beforeSend: function (xhr) {
                    msj_success_noti('Realizando proceso de certificación...')
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('El proceso de certificación para este médico se realizo correctamente.');
                        setTimeout(function (){
                            location.href=base_url+'admin/medicos_tipo?t=c';
                        },3000)
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
        
    })
    $('#add-slider').submit(function (e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/add_slider",
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado');
                    setTimeout(function (){
                        location.href=base_url+'admin/slider';
                    },1000)
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve();
            }
        })
    })
    $('#slider_titulo_prin_align').val($('#slider_titulo_prin_align').attr('data-value')).select2();
    $('#slider_titulo_sec_align_x').val($('#slider_titulo_sec_align_x').attr('data-value')).select2();
    $('#slider_btn_aling_x').val($('#slider_btn_aling_x').attr('data-value')).select2();
    $('input[name=slider_titulo_sec_radio]').click(function (e){
        if($(this).val()=='No'){
            $('.titulo-secundario').addClass('hidden')
            $('.slider_titulo_sec').val('');
            $('input[name=slider_titulo_sec_align_y]').val('');
            $('input[name=slider_titulo_sec_font]').val('');
        }else{
            $('.titulo-secundario').removeClass('hidden')
        }
    })
    $('input[name=slider_btn_text_radio]').click(function (e){
        if($(this).val()=='No'){
            $('.content-btn').addClass('hidden');
            $('input[name=slider_btn_text]').val('');
            $('input[name=slider_btn_url]').val('');
            $('input[name=slider_btn_aling_y]').val('');
        }else{
            $('.content-btn').removeClass('hidden')
        }
    })
    if($('.slider_titulo_sec').val()==''){
        $('#slider_titulo_sec_radio_no').attr('checked',true);
        $('.titulo-secundario').addClass('hidden');
    }
    if($('input[name=slider_btn_text]').val()==''){
        $('#slider_btn_text_no').attr('checked',true);
        $('.content-btn').addClass('hidden');
    }
    $('body').on('click','.del-slider',function (e){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR ESTE REGISTRO?')){
            $.ajax({
                url: "admin/eliminar_slider",
                dataType: 'json',
                type: 'POST',
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
    $('body .upload-archivo').fileinput({
            language: 'es',
            showUpload: false
    }); 
    $.ajax({
        url: base_url+"inicio/get_estados",
        dataType: 'json',
        success: function (data, textStatus, jqXHR) {
            $('#select-estados-examen').html(data['optionV2'])
        },error: function (jqXHR, textStatus, errorThrown) {  
        }
    })
    $('#select-estados-examen').change(function (e){
        $.ajax({
            url: base_url+"inicio/miperfil_data/get_medicos_estados_sinodal",
            dataType: 'json',
            type: 'POST',
            data:{'id':$(this).val()},
            success: function (data, textStatus, jqXHR) {
                $('#selec_medico_sinodal').html(data.option).removeAttr('disabled');
            },error: function (e) {
                msj_error_serve()
            }
        })
    })
    $('.registro-noticias').submit(function(e){
        e.preventDefault();
        var form=new FormData($(this)[0]);
        $.ajax({
            url: base_url+"admin/registrar_noticias",
            type: 'POST',
            dataType: 'json',
            data:form,
            processData: false,
            contentType: false,
            mimeType: 'multipart/form-data',
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...')
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado correctamente');
                    setTimeout(function(e){
                        location.href=base_url+'admin/noticias'
                    },1000)
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve();
            }
        })
        
    })
    $('.eliminar-anexo-noticia').click(function(e){
        var el=$(this).attr('data-id');
        $.ajax({
            url: base_url+"admin/eliminar_enexos_noticias",
            type: 'POST',
            dataType: 'json',
            data:{'id':el},
            beforeSend: function (xhr) {
                msj_success_noti('Eliminando...');
            },
            success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    $('#'+el+'_anexo').remove()
                }
            },error:function(){
                msj_error_serve()
            }
        })
    })
    $('body').on('click','.eliminar-noticia',function(e){
        var el=$(this).attr('data-id');
        $.ajax({
            url: base_url+"admin/eliminar_noticia",
            type: 'POST',
            dataType: 'json',
            data:{'id':el},
            beforeSend: function (xhr) {
                msj_success_noti('Eliminando...');
            },
            success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro eliminado..');
                    $('#'+el).remove()
                }
            },error:function(){
                msj_error_serve()
            }
        })
    });
    $('body').on('click','.asignar-como-sinidal',function(e){
        e.preventDefault();
        var el=$(this).attr('data-id');
        var accion=$(this).attr('data-accion');
        $.ajax({
            url: base_url+"admin/asignar_como_sinodal",
            dataType: 'json',
            type: 'POST',
            data:{
                'medico':el,
                'accion':accion
            },beforeSend: function (xhr) {
                msj_success_noti('Guardando Cambios...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Cambios guardados');
                    setTimeout(function(e){
                        location.reload();
                    },1000)
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_noti('Error al procesar la petición al servidor');
            }
        });
    })
    $('.btn-finalizar-prc').click(function (e){
        var el =$(this);
        if(confirm('¿FINALIZAR EL PROCESO DE CERTIFICACIÓN?.\n\n AL HACER CLICK EN ACEPTAR, EL PROCESO DE CERTIFICACIÓN PASARÁ A UN ESTADO DE FINALIZADO')){
            $.ajax({
                url: base_url+"inicio/renovacion_certificacion/finalizar_proceso",
                dataType: 'json',
                type: 'POST',
                data:{
                    'id':el.attr('data-id'),
                    'medico_id':el.attr('data-medico'),
                    'renovacion_c_puntos':el.attr('data-puntos'),
                    'fecha_fin':get_fecha_actual(),
                    'renovacion_c_ultima':fecha_yyyy_mm_dd_pc()
                },
                beforeSend: function (xhr) {
                    msj_success_noti('Guardando cambios para finalizar el proceso de certificación');
                },success: function (data, textStatus, jqXHR) {
                    console.log(data)
                    console.log(el.attr('data-id'))
                    if(data.accion=='1'){
                        msj_success_noti('El proceso de renovación se finalizó corectamente');
                        setTimeout(function (){
                          location.href=base_url+'admin/medicos_tipo?t=c';
                        },1000);
                    }
                },error: function (e, textStatus, errorThrown) {
                    msj_error_serve();
                    console.log(e)
                }
            })
        }
    })    
    $('body').on('click','.eliminar_medico',function(e){
        var el=$(this).attr('data-id');
        var accion=$(this).attr('data-accion');
        var msj,titulo;
        if(accion==''){
            titulo='CMOT | Reactivar cuenta de usuario';
            msj='¿DESEA REACTIVAR LA CUENTA DE ESTE USUARIO? LA CUENTA DEL USUARIO SE ACTIVARA Y PODRA TENER ACCESO A LA PLATAFORMA';
        }else{
            titulo='CMOT | Desactivar cuenta de usuario';
             msj='¿DESEA DESACTIVAR LA CUENTA DE ESTE USUARIO? LA CUENTA DEL USUARIO SE DESACTIVARÁ COMPLETAMENTE Y NO PODRA TENER ACCESO A LA PLATAFORMA'
        }
        bootbox.dialog({
            title: titulo,
            message: '<h4 class="text-center">'+msj+'</h4>',
            closeButton: true,
            buttons: {
                success: {
                    label     : 'Aceptar',
                    className : 'back-imss btn btn-primary btn-cons',
                    callback  : function(result) {
                        if(result){
                            $.ajax({
                                url: base_url+"admin/eliminar_medico",
                                type: 'POST',
                                dataType: 'json',
                                data:{'m':el,'accion':accion},
                                beforeSend: function (xhr) {
                                    msj_success_noti('Eliminando registro...')
                                },success: function (data, textStatus, jqXHR) {
                                    if(data.accion=='1'){
                                        msj_success_noti('Médico eliminado correctamente');
                                        $('#'+el).remove();
                                    }
                                },error: function (e) {
                                    msj_error_noti(e)
                                }
                            })
                        }
                         
                    }
                } 
            },onEscape : function() {}
        });
        //fa fa-times
        $('body .modal-dialog').css({'width':'30%','margin-top':'100px'});
        $('body .modal-body').addClass('text_25');
        $('body .modal-header').addClass('back-imss')
        $('.modal-title').css({
            'color'      : 'white',
            'text-align' : 'left'
        });
        $('.close').css({
            'color'     : 'white',
            'font-size' : 'x-large'
        });
    })
    if($("#filename").val()!=''){
        $('.html5imageupload').css({
            'background':'url('+base_url+'assets/img/slider/'+$("#filename").val()+')',
            'background-size':'cover',
            'background-position':'center'
        })
    }
    $('body').on('click','.status_usuario',function(e){
        var id=$(this).attr('data-id');
        var accion=$(this).attr('data-accion');
        $.ajax({
            url: base_url+"admin/acceso_user",
            type: 'POST',
            dataType: 'json',
            data: {
                'id':id,
                'accion':accion
            },beforeSend: function (xhr) {
                msj_success_noti('Guardando cambios...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Accion realizada correctamente');
                    setTimeout(function(){
                        location.reload();
                    },1000);
                }
            },error: function (e) {
                msj_error_noti(e)
            }
        })
    })
    $('input[name=radio_anual]').click(function(e){
        if($(this).val()=='Si'){
            $('.radio_anual').removeClass('hide');
        }else{
            $('.radio_anual').addClass('hide').find('input').val('');
        }
    })
    $('input[name=radio_mensual]').click(function(e){
        if($(this).val()=='Si'){
            $('.radio_mensual').removeClass('hide');
        }else{
            $('.radio_mensual').addClass('hide').find('input').val('');
        }
    })
    $('input[name=radio_dias]').click(function(e){
        if($(this).val()=='Si'){
            $('.radio_dias').removeClass('hide');
        }else{
            $('.radio_dias').addClass('hide').find('input').val('');
        }
    })
    if($('input[name=config_email_tipo_a]').val()!=''){
        $('#radio_anual_si').attr('checked',true);
        $('.radio_anual').removeClass('hide');
    }
    if($('input[name=config_email_tipo_m]').val()!=''){
        $('#radio_mensual_si').attr('checked',true);
        $('.radio_mensual').removeClass('hide');
    }
    if($('input[name=config_email_tipo_d]').val()!=''){
        $('#radio_dias_si').attr('checked',true);
        $('.radio_dias').removeClass('hide');
    }
    $('.form-config-email').submit(function(e){
        $.ajax({
            url: base_url+"admin/envio_email",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando cambios...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    location.reload();
                }
            },error: function (e) {
                msj_error_noti(e)
            }
        })
    });
    $('.registro-medico-vc').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/medico_cvc",
            type: 'POST',
            dataType: 'json',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando registro...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Registro guardado.');
                    setTimeout(function(){
                        location.href=base_url+'admin/certificacion_vc';
                    },1000);
                }
            },error: function (e) {
                msj_error_noti(e)
            }
        })
    })
    $('.elimanar-medico-vc').on('click',function(e){
        e.preventDefault();
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA ELIMINAR EL REGISTRO?')){
            $.ajax({
                url: base_url+"admin/eliminar_medico_cvc",
                type: 'POST',
                dataType: 'json',
                data:{'id':el},
                beforeSend: function (xhr) {
                    msj_success_noti('Eliminando...');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro eliminado');
                        $('#'+el).remove();
                    }
                },error:function(e){
                    msj_error_noti(e)
                }
            })
        }
    })
    $('.certificar-medico-vc').on('click',function(e){
        var el=$(this).attr('data-id');
        if(confirm('¿DESEA REALIZAR LA CERTIFICACIÓN DE ESTE MÉDICO VÍA CURRICULAR?')){
            $.ajax({
                url: base_url+"admin/certificar_vc",
                type: 'POST',
                dataType: 'json',
                data:{'id':el,'fecha_hoy':fecha_yyyy_mm_dd()},
                beforeSend: function (xhr) {
                    msj_success_noti('Guardando cambios...');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Cambios Guardados');
                        $('#'+el).remove();
                    }
                },error:function(e){
                    msj_error_noti(e)
                }
            })
        }
    })
    $('.editar-puntos').on('click',function(e){
        var id=$(this).attr('data-id');
        var puntos=$(this).attr('data-puntos');
        bootbox.dialog({
            title: 'Modificar registro',
            message:'<div class="row">'+
                        '<div class="col-sm-12">'+
                            '<div class="form-group">'+
                                '<label>Puntos</label>'+
                                '<input type="text" id="tabulador_puntos_punto" value="'+puntos+'" class="form-control">'+
                            '</div><!-- /.form-group -->'+
                        '</div>'+
                    '</div>',
            buttons: {
                    success: {
                        label: 'Guardar',
                        className: 'btn btn-primary back-imss',
                        callback: function(res) {
                            var tabulador_puntos_punto=$('#tabulador_puntos_punto').val();      
                            if(tabulador_puntos_punto!=''){
                                $.ajax({
                                    url: base_url+"admin/update_puntos_tabulador",
                                    type: 'POST',
                                    dataType: 'json',
                                    data:{
                                        'id':id,
                                        'puntos':tabulador_puntos_punto
                                    },beforeSend: function (xhr) {
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
    $('.btn-enviar-datos').on('click',function(e){
        var mail=$(this).attr('data-email');
        var rfc=$(this).attr('data-rfc');
        var registro=$(this).attr('data-registro');
        var medico=$(this).attr('data-medico');
        var msj;
        var msj_btn;
        if(mail!=''){
            if(rfc!='' && registro!=''){
                msj_btn='Enviar'
                msj='ENVIAR USUARIO Y CONTRASEÑA PARA EL ACCESO A LA PLATAFORMA DEL CMOT'
            }else{
                msj='DATOS DE ACCESO NO ESPECIFICADOS';
                msj_btn='Cancelar'
            }
            
        }else{
           msj='Email NO Especificado';
           msj_btn='Cancelar'
        }
        bootbox.dialog({
            title: 'Enviar Datos de Acceso',
            message:'<div class="row">'+
                        '<div class="col-sm-12">'+
                            '<h4 class="text-center">'+msj+'</h4>'+
                        '</div>'+
                    '</div>',
            buttons: {
                    success: {
                        label: msj_btn,
                        className: 'btn btn-primary back-imss',
                        callback: function(res) {
                             if(mail!='' && rfc!='' && registro!=''){
                                 $.ajax({
                                     url: base_url+"admin/enviar_datos_acceso",
                                     type: 'POST',
                                     dataType: 'json',
                                     data:{'medico':medico},
                                     beforeSend: function (xhr) {
                                         msj_success_noti('Enviando datos de acceso')
                                    },success: function (data, textStatus, jqXHR) {
                                        if(data.accion=='1'){
                                            msj_success_noti('Datos de acceso enviado correctamente')
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
    $('.registro-medico-certificado').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: base_url+"admin/registrar_medico_certificado",
            dataType: 'json',
            type: 'POST',
            data:$(this).serialize(),
            beforeSend: function (xhr) {
                msj_success_noti('Guardando...')
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Médico Registrado Correctamente');
                    history.go(-1);
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        })
    })
    $('input[name=fecha_actual]').val(fecha_yyyy_mm_dd());
    $('.importar-medicos-certificados').submit(function(e){
        e.preventDefault();
        var form=new FormData($(this)[0]);
        $.ajax({
            url: base_url+"admin/importar_medicos_file",
            dataType: 'json',
            type: 'POST',
            data:form,
            contentType: false,
            processData: false,
            mimeType: 'multipart/form-data',
            beforeSend: function (xhr) {
                msj_success_noti('Importando archivo...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    msj_success_noti('Archivo importado correctamente');
                    history.go(-1);
                }else{
                    msj_error_noti('Error al subir el archivo');
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        });
    })
    $('.medicos-recertificacion').on('submit',function(e){
        e.preventDefault();
        var form=new FormData($(this)[0]);
        if(confirm('¿DESEA REALIZAR EL PROCESO DE RECERTIFICACIÓN DE ESTE MÉDICO?')){
           $.ajax({
                url: base_url+"admin/recertificar_medico",
                type: 'POST',
                dataType: 'json',
                data: form,
                contentType: false,
                processData: false,
                mimeType: 'multipart/form-data',
                beforeSend: function (xhr) {
                    msj_success_noti('Guardando cambios...');
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Cambios guardados');
                        history.go(-1);
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
           })
       }
    });
})