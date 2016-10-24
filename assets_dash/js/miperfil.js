/*  * @felipe de jesus | iti_fjpp@hotmail.com */
    $(document).ready(function (){
        //get_miperfil();
        title('Información de perfil')
        function get_miperfil(){
            $.ajax({
                url: base_url+"usuarios/configuraciones/get_perfil_user",
                dataType: 'json',
                success: function (data) {
                    $.each(data['data'],function (i,e){
                        $('#jtfNombre').val(e.nombreUsuario);
                        $('#jtfApellidos').val(e.apellidosUsuario);
                        $('#formDireccion').val(e.direccionUsuario);
                        $('#jtfTelefono').val(e.telefonoUsuario);
                        $('#jtfEmail').val(e.emailUsuario);
                        $('#jtfRol').val(e.tipoRol);
                        $('.username').html(e.nombreUsuario+'  <span class="bold">'+e.apellidosUsuario+'</span>')
                        $('#formContraOriginal').val(e.passUsuario)
                        $('#perfilactual').val(e.perfilUsuario)
                        $('#formUsuario').val(e.userUsuario)
                        $('.profile-pic').css('background','url('+base_url+'PM_Sistema/img/perfiles/thumbs/'+e.perfilUsuario+')');
                        $('.profile-pic').css('background-position','center');
                        $('.profile-pic').css('background-size','cover');
                        $('#img-perfil').css('background','url('+base_url+'PM_Sistema/img/perfiles/thumbs/'+e.perfilUsuario+')');
                        $('#img-perfil').css('background-position','center');
                        $('#img-perfil').css('background-size','cover');
                    })

                },error: function (e) {
                    msj_error_noti('Error al obtener la información de perfil')
                }
            })
        }
        $('.edit-info').click(function (){
            $(this).hide();
            $('#formInfoGeneral input').removeAttr('readonly')
            $('.edit-info-save').removeClass('hide')
        })
        $('#formInfoGeneral').submit(function (e){
            e.preventDefault();
            $.ajax({
                url: base_url+"admin/actualizar_info_perfil",
                type: 'POST',
                dataType: 'json',
                data:$(this).serialize(),
                beforeSend: function (xhr) {
                    msj_success_noti('Actualizando información')
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Información actualizada correctamente');
                        setTimeout(function(e){
                            location.reload(); 
                        },1000)
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_noti('Error al realizar la petición al servidor')
                }
            });
            
        })
        $('#formCambiarContra').submit(function (e){
            e.preventDefault()
            if($('#jtfNuevaC').val()==$('#jtfNuevaC_C').val()){
                if($('#formContraOriginal').val()==md5($('#jtfContraActual').val())){
                    
                    $.ajax({
                        url: base_url+"admin/update_pass",
                        type: 'POST',
                        dataType: 'json',
                        data:{
                            'usuario_pass':$('#jtfNuevaC_C').val(),
                            'usuario_id':$('input[name=usuario_id]').val()
                        },beforeSend: function (xhr) {
                            msj_success_noti('Actualizando información')
                        },success: function (data, textStatus, jqXHR) {
                            if(data.accion=='1'){
                                msj_success_noti('Información actualizada correctamente');
                                setTimeout(function(e){
                                    location.reload(); 
                                },1000)
                            }
                        },error: function (jqXHR, textStatus, errorThrown) {
                            msj_error_noti('Error al realizar la petición al servidor')
                        }
                    })
                }else{
                    msj_error_noti('Contraseña actual incorrecta')
                }
            }else{
                msj_error_noti('Las contraseñas  escritas no coinciden');
            }
        })
        $('#formCambiarUser').submit(function (e){
            e.preventDefault()
            if($('#formContraOriginal').val()==md5($('#formContraActualU').val())){
                $.ajax({
                    url: base_url+"inicio/miperfil_data/update_user",
                    dataType: 'json',
                    type: 'POST',
                    data:{'usuario_user':$('#formUsuarioNuevo').val()},
                    beforeSend: function (xhr) {
                        msj_success_noti('Actualizando información')
                    },success: function (data, textStatus, jqXHR) {
                        if(data.accion=='1'){
                            msj_success_noti('Información actualizada correctamente');
                            setTimeout(function(e){
                                location.reload(); 
                            },1000)
                        }
                    },error: function (jqXHR, textStatus, errorThrown) {
                        msj_error_noti('Error al realizar la petición al servidor')
                    }
                })
            }else{
                msj_error_noti('Contraseña actual incorrecta')
            }
        })
        $('#MostrarPass').click(function (){
            mostrar_pass('MostrarPass','show-pass-c');
        })
        $('#MostrarPassUser').click(function (){
            mostrar_pass('MostrarPassUser','show-pass-u');
        })
        function mostrar_pass(check, clase){
            if($('#'+check).is(':checked')){
                $('.'+clase).prop('type','text');
            }else{
                $('.'+clase).prop('type','password');
            }
        }
        $('#updatePerfil').submit(function (e){
            e.preventDefault();
            if($('#filename').val()!=''){
                $.ajax({
                    url: base_url+"admin/cambiar_perfil",
                    dataType: 'json',
                    type: 'POST',
                    data:{
                        'perfil':$('#filename').val(),
                        'admin_id':$('input[name=administrador_id]').val()
                    },beforeSend: function (xhr) {
                        msj_success_noti('Actualizando información')
                    },success: function (data, textStatus, jqXHR) {
                        if(data.accion=='1'){
                            msj_success_noti('Información actualizada correctamente');
                            setTimeout(function(e){
                                location.reload(); 
                            },1000)
                        }
                    },error: function (jqXHR, textStatus, errorThrown) {
                        msj_error_noti('Error al realizar la petición al servidor')
                    }
                })
            }else{
                msj_error_noti('Seleccionar imagen de perfil')
            }
        })
    $('#formUsuarioNuevo').blur(function (e){
        var input=$(this);
        if(input.val()!=''){
            $.ajax({
                url: base_url+"login/check_user",
                dataType: 'json',
                type: 'POST',
                data:{'user':input.val()}
                ,beforeSend: function (xhr) {
                    msj_success_noti('Verificando disponibilidad de usuario');
                    $('.btn-cambiar-user').attr('disabled',true);
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Nombre de usuario disponible')
                        $('#btnActualizarUser').removeAttr('disabled');
                    }else{
                        msj_error_noti('Nombre de usuario no disponible')
                        $('#btnActualizarUser').attr('disabled',true);
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        }
    })
        function update_info(url,form){
            $.ajax({
                url: base_url+"usuarios/configuraciones/"+url,
                dataType: 'json',
                type: 'POST',
                data:$('#'+form).serialize(),
                beforeSend: function (xhr) {
                    msj_success_noti('Modificando..');
                },success: function (data) {
                    switch (data['accion']){
                        case '1':
                            msj_success_noti('Información actualizada');
                            get_miperfil()
                            break;
                        case '2':
                            msj_error_noti('Error al actualizar la información');
                            break;
                    }
                },error: function () {
                    msj_error_noti('Error al actualizar la información');
                }
            })
        }
        var numeros="0123456789";
        var letras="abcdefghyjklmnñopqrstuvwxyz";
        var letras_mayusculas="ABCDEFGHYJKLMNÑOPQRSTUVWXYZ";

        function tiene_numeros(texto){
            for(i=0; i<texto.length; i++){
                if (numeros.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 

        function tiene_letras(texto){
            texto = texto.toLowerCase();
            for(i=0; i<texto.length; i++){
                if (letras.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 

        function tiene_minusculas(texto){
            for(i=0; i<texto.length; i++){
                if (letras.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 

        function tiene_mayusculas(texto){
            for(i=0; i<texto.length; i++){
                if (letras_mayusculas.indexOf(texto.charAt(i),0)!=-1){
                    return 1;
                }
            }
            return 0;
        } 
        $('#jtfNuevaC').keyup(function (){
            muestra_seguridad_clave($(this).val())
        })
        function seguridad_clave(clave){
            var seguridad = 0;
                if (clave.length!=0){//Tiene letras y números: +30% 
                    if (tiene_numeros(clave) && tiene_letras(clave)){
                        seguridad += 30;
                    } 
                    if (tiene_minusculas(clave) && tiene_mayusculas(clave)){//Tiene mayúsculas y minúsculas: +30% 
			seguridad += 30;
                    }
                    if (clave.length >= 4 && clave.length <= 5){//Tiene entre 4 y 5 caracteres: +10% 
                            seguridad += 10;
                    }else{
			if (clave.length >= 6 && clave.length <= 8){//Tiene entre 6 y 8 caracteres: +30% 
				seguridad += 30;
			}else{
                            if (clave.length > 8){//Tiene más de 8 caracteres: +40% 
                                seguridad += 40;
                            }
			}
                    }
                }
                return seguridad				
        }	
        function muestra_seguridad_clave(clave){
            seguridad=seguridad_clave(clave);
            if(seguridad==10){
                $("#NivelSeguridad").css('background','#DC2323');
            }
            if(seguridad==30){
                $("#NivelSeguridad").css('background' ,'#F35958');
            }
            if(seguridad==40){
                $("#NivelSeguridad").css('background' ,'#F9BA46');
            } 
            if(seguridad==60){
                $("#NivelSeguridad").css('background' ,'#0090D9');
            }  
            if(seguridad==70){
                $("#NivelSeguridad").css('background' ,'#0090D9');
            }  
            if(seguridad==100){
                $("#NivelSeguridad").css('background' ,'#0AA699');
            }                 
            $("#NivelSeguridad").css("width",seguridad+"%");
            $("#NivelSeguridad").attr('data-percentage',seguridad+"%");
        }  
        $('#img-perfil').hover(
            function (){
                $('.btn-edit-perfil').removeClass('no-display');
            }         
        )
        $('.btn-img-perfil').hover(
            function (){
                $('.btn-edit-perfil').addClass('no-display');
            }         
        )
        $('.btn-edit-perfil').click(function (){
            $('.form-info-general li').removeClass('active');
            $('.info-general .tab-pane').removeClass('active');
            $('.cambiar-img').addClass('active')
            $('#cambiarperfil').addClass('active');
        })            
    })

