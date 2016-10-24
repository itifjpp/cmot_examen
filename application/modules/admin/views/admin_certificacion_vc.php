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
            <li><a href="#" class="">Médicos</a> </li>
            <li><a href="#" class="active">Certificacion vía curricular</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Médicos certificados vía curricular</h4>
                        <a href="<?=  base_url()?>admin/certificacion_vc_add?a=add&m=0" class="">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>

                                    <th style="width:auto">Médico</th>
                                    <th style="width:auto">RFC</th>
                                    <th style="width:auto">Registro</th>
                                    <th style="width:auto" >Email</th>
                                    <th style="width:auto" >Fecha registro</th>
                                    <th style="width:auto" >Certificación</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['medico_cvc_id']?>">
                                    <td class="v-align-middle"><?=$g['medico_cvc_nombre']?> <?=$g['medico_cvc_apellidos']?></td>
                                    <td class="v-align-middle"><?=$g['medico_cvc_rfc']?></td>
                                    <td class="v-align-middle"><?=$g['medico_cvc_registro']?></td>
                                    <td class="v-align-middle"><?=$g['medico_cvc_email']?></td>
                                    <td class="v-align-middle"><?=$g['medico_cvc_fecha']?></td>
                                    <td class="v-align-middle">
                                        <?php if($g['medico_cvc_status']=='Sin Certificar'){?>
                                        <span class="label label-important">Sin Certificar</span>
                                        <?php }else{?>
                                        <span class="label label-success">Certificado</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php 
                                        if($g['medico_cvc_status']=='Sin Certificar'){
                                            $class_del='elimanar-medico-vc';
                                            $msj_del='Eliminar Médico';
                                            $url_edit=  base_url().'admin/certificacion_vc_add?a=edit&m='.$g['medico_cvc_id'];
                                            $msj_edit='Editar Médico';
                                            $class_edit='';
                                            $class_mcvc='certificar-medico-vc';
                                            $msj_cer='Certificar Médico';
                                            
                                        }else{
                                            $class_edit='icono-no-accion';
                                            $class_del='icono-no-accion';
                                            $msj_del='';
                                            $url_edit='#';
                                            $msj_edit='';
                                            $class_mcvc='icono-no-accion';
                                            $msj_cer='';
                                        }
                                        ?>
                                        <i class="fa fa-user-md icono-acciones tip pointer <?=$class_mcvc?>" data-id="<?=$g['medico_cvc_id']?>" data-original-title="<?=$msj_cer?>"></i>&nbsp;
                                        <a href="<?=$url_edit?>" >
                                            <i class="fa fa-pencil tip icono-acciones <?=$class_edit?>" data-original-title="<?=$msj_edit?>"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o pointer tip icono-acciones <?=$class_del?>" data-original-title="<?=$msj_del?>" data-id="<?=$g['medico_cvc_id']?>"></i>
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
