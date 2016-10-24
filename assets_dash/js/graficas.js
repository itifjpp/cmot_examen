$(document).ready(function(e){

    
    Morris.Donut({
      element: 'grafica-1',
      data: [
            {label: "Médicos Certificados", value: $('.t_mc').attr('data-value')},
            {label: "Medicos en Proceso", value: $('.t_mp').attr('data-value')},
            {label: "Médicos Vigentes", value: $('.t_mv').attr('data-value')},
            {label: "Médicos NO Vigentes", value: $('.t_mnv').attr('data-value')}
      ],
      colors:['#0AA699','#FDD01C','#0090D9','#F14D4D']
    });
    /*http://omnipotent.net/jquery.sparkline/2.1/jquery.sparkline.js*/
    $("#grafica-2").sparkline([$('.t_mc').attr('data-value'),$('.t_mp').attr('data-value'),$('.t_mv').attr('data-value'),$('.t_mnv').attr('data-value')], {
            type: 'pie',//line
            width: '100%',
            height: '100%',
            sliceColors: ['#0AA699','#FDD01C','#0090D9','#F14D4D'],
            offset: 10,
            borderWidth: 0,
            borderColor: '#000000 ',
            tooltipFormat: '{{offset:offset}} ({{percent.1}}%)',
            tooltipValueLookups: {
                'offset': {
                    0: 'Médicos Certificados',
                    1: 'Medicos en Proceso',
                    2: 'Médicos Vigentes',
                    3: 'Médicos NO Vigentes'
                }
            }
    });
    $.ajax({
        url: base_url+"admin/actualizar_vigencias",
        type: 'POST',
        dataType: 'json'
        ,success: function (data, textStatus, jqXHR) {
           // console.log(data)
        },error: function (jqXHR, textStatus, errorThrown) {
            msj_error_serve();
        }
    })
   $('.footable').footable();
   $('.total-usuarios-accesos').text($('input[name=total_medicos_accesos]').val());
})
