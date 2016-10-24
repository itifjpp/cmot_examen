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
            <li><a href="#" class="active">Médicos Certificados</a> </li>
        </ul>
        <div class="row-fluid">

            <div class="span12 table-data ">
                <div class="grid simple ">
                    <div class="grid-title">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Gestión de Médicos Certificados</h4>
                            </div>
                            <div class="col-md-2">
                                <a href="<?=  base_url()?>admin/importar_medicos">
                                    <button class="btn btn-primary btn-block">Importar Médicos</button>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="<?=  base_url()?>admin/agregar_medico?add=0&m=0">
                                    <button class="btn btn-primary btn-block">Agregar Médico</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed " id="example">
                            <thead>
                                <tr>
                                    <th style="width: auto">Usuario</th>
                                    <th style="width: auto">Médico</th>
                                    <th style="width: auto">Registro</th>
                                    <th style="width: auto">Vigencia</th>
                                    <th style="width: auto">Renovación</th>
                                    <th style="width: auto" class="">Sinodal</th>
                                    <th style="width: 15%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                
                                <tr id="<?=$g['medico_id']?>" <?=$g['usuario_status_eliminado']?>>
                                    <td class="v-align-middle"><?=$g['usuario_user']?> </td>
                                    <td class="v-align-middle"><?=$g['medico_nombre']?> <?=$g['medico_apellidos']?></td>
                                    <td class="v-align-middle"><?=$g['medico_registro']?></td>
                                    <td class="v-align-middle">
                                        <?php if($g['medico_status_vigencia']=='Vigente'){ ?>
                                        <span class="label label-success" >Vigente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <?php }else{?>
                                        <span class="label label-important">No Vigente</span>
                                        <?php } ?>
                                    </td>
                                    <td class="v-align-middle">
                                        <?php if($g['medico_status_renovacion']=='En proceso'){?>
                                        <span class="label label-success" ><i class="fa fa-clock-o"></i> En proceso</span>
                                        <?php }else{?>
                                        No Aplica
                                        <?php }?>
                                    </td>
                                    <td class="v-align-middle"><?=$g['medico_es_sinodal']?></td>
                                    <td class="v-align-middle">
                                        <?php
                                        $tooltip='';
                                        $check_fecha= explode('/', $g['medico_ultima_evaluacion']);
                                        if($g['medico_email']==''){
                                             $tooltip.= 'Email no especificado<br>';
                                        }if($g['medico_ultima_evaluacion']==''){
                                             $tooltip.= 'Fecha de evaluación no especificado<br>';
                                        }if(!checkdate($check_fecha[1], $check_fecha[2], $check_fecha[0])){
                                             $tooltip.= 'Formato de Fecha de Certificación no Válido: '.$g['medico_ultima_evaluacion'];
                                        }
                                        ?>
                                        <i class="fa fa-question-circle tip icono-acciones pointer" data-html="true" data-original-title="<?=$tooltip?>"></i>
                                        &nbsp;
                                        <?php if($g['medico_status_renovacion']=='En proceso'){$accion_mr='' ?>
                                        <a href="<?=  base_url()?>admin/detalles_renovacion?m=<?=$g['medico_id']?>" >
                                            <i class="fa fa-clock-o icono-acciones tip" data-original-title="Ver detalles del proceso de renovación"></i>
                                        </a>&nbsp;
                                        <?php }?>
                                        <a href="<?=  base_url()?>admin/ver_medico?m=<?=$g['medico_id']?>">
                                            <i class="fa fa-user icono-acciones tip" data-original-title="Ver datos generales del Médico"></i>
                                        </a>&nbsp;
                                        <?php if($g['medico_es_sinodal']=='No' || $g['medico_es_sinodal']==''){?>
                                        <i class="fa fa-user-plus icono-acciones tip pointer asignar-como-sinidal" data-id="<?=$g['medico_id']?>" data-accion='Si' data-original-title="Asignar como Médico SINODAL"></i>
                                        <?php }else{?>
                                        <i class="fa fa-user-times icono-acciones tip pointer asignar-como-sinidal" data-id="<?=$g['medico_id']?>" data-accion='No' data-original-title="Quitar asignación de médico SINODAL"></i>
                                        <?php }?>&nbsp;
                                        <i class="fa fa-trash-o icono-acciones eliminar_medico tip pointer" data-original-title="Eliminar médico" data-id="<?=$g['medico_id']?>"></i>
                                    </td>
                                </tr>
                                <?php endforeach;?>
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
