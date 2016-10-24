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
            <li><a href="#">Medicos</a> </li>
            <li><a href="#" class="active">Configuración de fecha de registros</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Configuración de fecha de registros</h4>
                        <?php 
                            if(!empty($Config)){
                                $msj_add='Nota: para agregar un nuevo registro debe esperar hasta que el proceso de apertura de registro finalize';
                                $btn_accion='#';
                            }else{
                                $msj_add='';
                                $btn_accion=  base_url().'admin/configuracion_registro_add?a=add&cr=0';
                            }
                        ?>
                        <a href="<?=$btn_accion?>" >
                            <button class="btn btn-cons pull-right back-imss tip" data-placement="left" data-original-title="<?=$msj_add?>" >Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Fecha apertura</th>
                                    <th style="width:auto">Fecha cierre</th>
                                    <th style="width:auto" >Tiempo restante para cierre </th>
                                    <th style="width: auto">Status</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['conf_registro_id']?>" <?=$g['conf_registro_accion']?>>
                                    <td class="v-align-middle"><?=$g['conf_registro_fecha_i']?></td>
                                    <td class="v-align-middle"><?=$g['conf_registro_fecha_f']?></td>
                                    <td class="v-align-middle"><?=$g['conf_registro_falta_mm'].' Meses'?> <?=$g['conf_registro_falta_dd'].' Dias'?></td>
                                    <td class="v-align-middle">
                                        <?php if($g['conf_registro_status']=='Activo'){?>
                                        <span class="label label-success"> Activo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <?php }if($g['conf_registro_status']=='En espera'){?>
                                        <span class="label label-warning"> En espera &nbsp;</span>
                                        <?php }if($g['conf_registro_status']=='Finalizado'){ ?>
                                        <span class="label label-important"> Finalizado &nbsp;</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php 
                                        if($g['conf_registro_status']=='Finalizado'){
                                            $msj='El proceso de registro finalizó';
                                            $msj_u='El proceso de registro finalizó';
                                            $href='#';
                                            $href_u='#';
                                        }else{
                                            $msj='Editar registro';
                                            $msj_u='Ver médicos en proceso';
                                            $href_u=  base_url().'admin/medicos_tipo?t=p';
                                            $href=  base_url().'admin/configuracion_registro_add?a=edit&cr='.$g['conf_registro_id'];
                                        }
                                        ?>
                                        <a href="<?=$href_u?>" draggable="">
                                            <i class="fa fa-users icono-acciones tip" data-original-title="<?=$msj_u?>" ></i>
                                        </a>&nbsp;
                                        <a href="<?=$href?>" >
                                            <i class="fa fa-pencil icono-acciones tip" data-original-title="<?=$msj?>"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o icono-acciones tip eliminar_conf pointer"  data-id="<?=$g['conf_registro_id']?>" data-original-title="Eliminar registro"></i>
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
<script src="<?=  base_url()?>assets_dash/js/config.js" ></script>
