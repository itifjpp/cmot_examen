var total_dudas=[];

$(document).ready(function(){
    /*Nuevas Funciones*/
    $('body .casoclinico_click').on('click',function(e){
        e.preventDefault();
        var id=$(this).attr('data-casoclinico');
        $('body .caso_clinico').hide();
        
        $('body .caso_clinico_'+id).toggle();
    })
    $('body .caso_clinico').on('click',function(){
        var id=$(this).attr('data-casoclinico');
        var no_select=$(this).find('.pregunta_seccion').length;
        var select=$(this).find('input[type=radio]:checked').length+1;
        if(no_select==select){
            $('body .casoclinico_click_'+id).addClass('back_ckeck_preg').removeClass('back_ckeck_preg_duda')
        }else{
            $('body .casoclinico_click_'+id).addClass('back_ckeck_preg_duda').removeClass('back_ckeck_preg')
        }
    })
    
    
    tota_preguntas=$('input[name=total_preguntas]').val();
    $('body .select_respuesta').on('click',function(e){
        var id=$(this).attr('data-id');
        var data_preg=$(this).attr('data-preg-res'); 
        $('.check_pregunta_ok'+id).addClass('back_ckeck_preg').removeClass('back_ckeck_preg_duda');
        total_dudas.splice( total_dudas.indexOf(id), 1 );
        $.ajax({
            url:base_url+"inicio/inicio_guardar_respuestas",
            type: 'POST',
            dataType: 'json',
            data:{
                'preg':data_preg,
                'usuario_id':$('input[name=usuario_id]').val(),
                'usuario_rfc':$('input[name=usuario_rfc]').val(),
                'casoclinico_id':$('input[name=casoclinico_id]').val()
                
            },success: function (data, textStatus, jqXHR) {
            },error: function (jqXHR) {
                console.log(jqXHR)
                msj_error_serve();
            }
        })
    })
    $('body .select_tengo_duda').on('click',function(e){
        var id=$(this).attr('data-id');
        $('.check_pregunta_ok'+id).addClass('back_ckeck_preg_duda').removeClass('back_ckeck_preg');
        if(total_dudas.indexOf(id)){
            total_dudas.push(id);
        }
        $.ajax({
            url:base_url+"inicio/inicio_eliminar_respuesta",
            type: 'POST',
            dataType: 'json',
            data:{
                'preg':id,
                'usuario_id':$('input[name=usuario_id]').val(),
                'casoclinico_id':$('input[name=casoclinico_id]').val()
                
            },success: function (data, textStatus, jqXHR) {
            },error: function (jqXHR) {
                console.log(jqXHR)
                msj_error_serve();
            }
        })
        
    })
    var click_preg=0;
    $('body .pregunta_click').on('click',function(e){
        
        $('.start-exam').hide()
        e.preventDefault();
        var id=$(this).attr('data-pregunta') ;
        click_preg=click_preg+1;
        $('body .preguntas').hide();
        $('body .pregunta_show_'+id).toggle();
    });
    
    $('.btn-finalizar-evaluacion').on('click',function (e){
        var check=$('.pagination').find('.back_ckeck_preg_duda').length;
        
        if(check==0){
            
            if(confirm('¿ESTA SEGURO QUE DESEA DAR COMO FINALIZADO LA EVALUACIÓN DE ESTE CASO CLÍNICO?')){
                $('.content-exam').hide();
                $('.ver-resultados').removeClass('hide');
            }
        }else{
            if(confirm('AUN NO HA RESPONDIDO TODAS LAS PREGUNTAS, ¿ESTA SEGURO QUE DESEA DAR COMO FINALIZADO LA EVALUACIÓN DE ESTE CASO CLÍNICO?')){
                $('.content-exam').hide();
                $('.ver-resultados').removeClass('hide');
            }
                
        }
        
    })
    function fin_eva(){
        $.ajax({
            url: base_url+"inicio/inicio_finalizar_cc",
            type: 'POST',
            dataType: 'json',
            data:{
                'usuario_id':$('input[name=usuario_id]').val(),
                'casoclinico_id':$('input[name=casoclinico_id]').val()
            },beforeSend: function (xhr) {
                msj_success_noti('Espere por favor...');
            },success: function (data, textStatus, jqXHR) {
                if(data.accion=='1'){
                    $('.content-exam').hide();
                    $('.ver-resultados').removeClass('hide');
                }
            },error: function (jqXHR, textStatus, errorThrown) {
                msj_error_serve()
            }
        })
    }
    $('.btn-start-exam').click(function(e){
        $('.start-exam').hide();
        $('.content-exam').removeClass('hide');
        $('body .caso_clinico').first().css({'display':'block'})
    })
    $('.footable').footable();
})