<?=  Modules::run('config/get_head_admin')?>
<div class="page-content"> 
<div class="clearfix"></div>
    <div class="content page-loading">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center>
                    <i class="fa fa-spinner fa-4x fa-spin"></i>
                </center>
            </div>
        </div>
    </div>
    <div class="content page-load hide"> 
        <ul class="breadcrumb">
            <li><p>Inicio</p></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="#" class="active">Seguimiento de Médicos</a> </li>
        </ul>
        <div class="row-fluid">

            <div class="span12 table-data ">
                <div class="grid simple ">
                    <div class="grid-title">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Listado de Médicos Próximos a Vencer su Certificación en los Siguientes 6 Meses</h4>        
                            </div>
                        </div>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed " id="example">
                            <thead>
                                <tr>
                                    <th style="width: 30%">Médico</th>
                                    <th style="width: auto">Registro</th>
                                    <th style="width: auto">Fecha Certificación</th>
                                    <th style="width: auto">Fecha Vigencia</th>
                                    <th style="width: auto">Tiempo de Vigencia</th>
                                    <th style="width: 15%" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):
                                    date_default_timezone_set('America/Mexico_City');
                                    $check_fecha= explode('/', $g['medico_ultima_evaluacion']);                                     
                                    if(checkdate($check_fecha[1], $check_fecha[2], $check_fecha[0])){
                                        $fecha_actual=new DateTime(date('Y-m-d'));
                                        //$fecha_evaluacion= new DateTime(str_replace('/', '-', $g['medico_ultima_evaluacion']));
                                        $fecha_evaluacion= new DateTime(date('Y-m-d',  strtotime(str_replace('/', '-', $g['medico_ultima_evaluacion']).'+5 year')));
                                        $status_renovacion = $fecha_actual->diff($fecha_evaluacion); 
                                        if($status_renovacion->y==0 && $status_renovacion->m<=6 && $g['medico_status_vigencia']=='Vigente'){
                                ?>  
                                        <tr id="<?=$g['medico_id']?>" <?=$g['usuario_status_eliminado']?>>
                                            
                                            <td class="v-align-middle" ><?=$g['medico_nombre']?> <?=$g['medico_apellidos']?></td>
                                            <td class="v-align-middle"><?=$g['medico_registro']?></td>
                                            <td class="v-align-middle"><?=$g['medico_ultima_evaluacion']?> </td>
                                            <td class="v-align-middle"><?=date('Y/m/d',  strtotime($g['medico_ultima_evaluacion'].'+5 year'))?> </td>
                                            <td class="v-align-middle">
                                                <?php if($status_renovacion->m>0){?>
                                                Faltan <?=$status_renovacion->m?> Meses <?=$status_renovacion->d?> Días
                                                <?php }else if($status_renovacion->d==0){?>
                                                Hoy Finaliza la Vigencia
                                                <?php }else{?>
                                                Falta <?=$status_renovacion->d?> Días
                                                <?php }?>
                                                
                                            </td>
                                            <td class="v-align-middle text-center">
                                                <a href="<?=  base_url()?>admin/ver_medico?m=<?=$g['medico_id']?>">
                                                    <i class="fa fa-user icono-acciones tip" data-original-title="Ver datos generales del Médico"></i>
                                                </a>&nbsp;
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php } ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
<script>
$(document).ready(function(e){
    $('body .DTTT').html('<a href="'+base_url+'admin/export_medicos?t=c" class="btn btn-white DTTT_button_collection " ><span><i class="fa fa-cloud-download tip" data-original-title="Exportar médicos a formato Excel"></i></span></a>');
})
</script>
