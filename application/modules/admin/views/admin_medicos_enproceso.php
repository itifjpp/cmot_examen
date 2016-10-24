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
            <li><a href="#" class="active">Médicos</a> </li>
        </ul>
        <div class="row-fluid">
            <?php 
            $hoy= str_replace('-', '/', $config[0]['conf_registro_hoy']);
            if(!empty($config) && strtotime($hoy)==  strtotime($config[0]['conf_registro_fecha_i'])){   
            ?>
            <div class="span12 table-data ">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión de Médicos en proceso de certificación</h4>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed " id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Usuario</th>
                                    <th style="width:auto">Evaluación</th>
                                    <th style="width:auto">Médico</th>
                                    <th style="width:auto">Sinodal</th>
                                    <th style="width: auto;" >Pago</th>
                                    <th style="width: auto;">% Datos</th>
                                    <th style="width: 17%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['medico_id']?>" <?=$g['usuario_status_eliminado']?>>
                                    <td class="v-align-middle"><?=$g['usuario_user']?></td>
                                    <td class="v-align-middle">
                                    <?php if($g['medico_status_evaluacion']!=''){?>
                                        Evaluado
                                    <?php }else{?>
                                        Sin evaluar
                                    <?php }?>
                                    </td>
                                    <td class="v-align-middle"><?=$g['medico_nombre']?> <?=$g['medico_apellidos']?></td>
                                    <td class="v-align-middle">
                                        <?php if($g['medico_sinodal_nombre']!=''){?>
                                        <?=$g['medico_sinodal_nombre']?>
                                        <?php }else{?>
                                        No Asignado
                                        <?php }?>
                                    </td>

                                    <td class="v-align-middle">
                                        <?php if($g['status_pago']==''){?>
                                        <span class="label label-warning">Sin pagar</span>
                                        <?php }else{?>
                                        <span class="label label-success">Pago realizado</span>
                                        <?php }?>
                                        
                                    </td>
                                    <td class="v-align-middle text-center">
                                        <?php 
                                        $status_info_basica=$g['status_info_basica'];
                                        $status_curriculum=$g['status_curriculum'];
                                        $status_residencia=$g['status_residencia'];
                                        $status_pago=$g['status_pago'];
                                        echo $status_info_basica + $status_curriculum + $status_residencia + $status_pago.' %'; 
                                        ?>
                                        
                                    </td>
                                    <td>
                                        <?php if($g['medico_sinodal_nombre']!=''){?>
                                        <a href="<?=  base_url()?>admin/asignacion_sinodal?m=<?=$g['medico_id']?>" target="_blank">
                                            <i class="fa fa-file-pdf-o icono-acciones tip" data-original-title="Generar documento de asignación de médico sinodal"></i>
                                        </a>&nbsp;&nbsp;
                                        <?php } ?>
                                        <?php if($g['medico_status_evaluacion']!=''){?>
                                        <i class="fa fa-user-md icono-acciones tip pointer certificar-medico" data-id="<?=$g['medico_id']?>" data-original-title="Certificar médico"></i>&nbsp;&nbsp;
                                        <?php }if($g['pago_medio']!='' && $g['medico_sinodal_nombre']==''){?>
                                        <a href="<?=  base_url()?>admin/asignar_medico?m=<?=$g['medico_id']?>">
                                            <i class="fa fa-plus icono-acciones tip" data-original-title="Asignación de sinodal"></i>
                                        </a>&nbsp;&nbsp;
                                        <?php }if($g['pago_medio']=='Ventanilla'){?>
                                        <a href="<?=  base_url()?>assets_dash/comprobante_pagos/<?=$g['pago_comprobante']?>" target="_blank">
                                            <i class="fa fa-file-text icono-acciones tip" data-original-title="Ver comprobante de pago"></i>
                                        </a>&nbsp;&nbsp;
                                        <?php }?>
                                        <?php if($g['status_pago']==''){?>
                                        <a href="<?=  base_url()?>admin/registrar_pago?m=<?=$g['medico_id']?>" >
                                            <i class="fa fa-file-text icono-acciones tip" data-original-title="Registrar pago"></i>
                                        </a>&nbsp;&nbsp;
                                        <?php }?>
                                        <i class="fa fa-unlock-alt icono-acciones cambiar-pass pointer tip" data-id="<?=$g['usuario_id']?>" data-original-title="Cambiar contraseña"></i>&nbsp;&nbsp;
                                        <a href="<?=  base_url()?>admin/medico_en_proceso?m=<?=$g['medico_id']?>">
                                            <i class="fa fa-user icono-acciones tip" data-original-title="Ver detalles del médico"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o icono-acciones eliminar_medico tip pointer" data-original-title="Eliminar médico" data-id="<?=$g['medico_id']?>"></i>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <h3 class="text-center">La fecha de registro para la certificación aun no esta abierta</h3>
            <?php }?>
        </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
<script>
$(document).ready(function(e){
    $('body .DTTT').html('<a href="'+base_url+'admin/export_medicos?t=p" class="btn btn-white DTTT_button_collection tip" ><span><i class="fa fa-cloud-download tip" data-original-title="Exportar médicos a formato Excel"></i></span></a>');
})
</script>
