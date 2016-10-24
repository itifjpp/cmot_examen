$(document).ready(function (){
    $('.del-asistencia-congresos').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'asistencia_congresos_id',
            'table':'cmot_asistencia_congresos'
        })
    })
    $('.del-labor-asistencial').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'labor_asistencial_id',
            'table':'cmot_labor_asistencial'
        })
    })
    $('.del-reactivos-participacion').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'reactivos_participacion_id',
            'table':'cmot_reactivos_participacion'
        })  
    })
    $('.del-osc').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'asociaciones_cientificas_id',
            'table':'cmot_asociaciones_cientificas'
        })  
    })
    $('.del-actividades-docentes').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'actividad_docente_id',
            'table':'cmot_actividades_docentes'
        })  
    })
    $('.del-publicaciones').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'publicacion_id',
            'table':'cmot_publicaciones'
        })  
    })
    $('.del-puestos-cmot').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'puesto_id',
            'table':'cmot_puestos'
        })  
    })
    $('.del-puestos-sr').click(function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'puestos_sr_id',
            'table':'cmot_puestos_sr'
        })  
    })
    $('body').on('click','.del-trayectoria',function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'trayectoria_id',
            'table':'cmot_m_trayectoria'
        })   
    })
    $('body').on('click','.del-formacion-pro',function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'formacion_id',
            'table':'cmot_m_formacion'
        })   
    })
    $('body').on('click','.del-curriculum-info',function (e){
        eliminar_data($(this).attr('data-id'),{
            'id_table':'curriculum_id',
            'table':'cmot_medico_curriculum'
        })   
    })
    function eliminar_data(el,data){
        if(confirm(msj_delete())){
            $.ajax({
                url: base_url+"inicio/miperfil_data/eliminar_datos_renovacion",
                dataType: 'json',
                type: 'POST',
                data:{
                    'id':el,
                    'id_table':data.id_table,
                    'table':data.table,
                },beforeSend: function (xhr) {
                    msj_success_noti('Eliminando registro...')
                },success: function (data, textStatus, jqXHR) {
                    if(data.accion=='1'){
                        msj_success_noti('Registro eliminado.');
                        $('#'+el).remove();
                    }
                },error: function (jqXHR, textStatus, errorThrown) {
                    msj_error_serve()
                }
            })
        } 
    }
})
