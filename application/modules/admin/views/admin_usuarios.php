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
            <li><a href="#" class="active">Gestión de cuentas de usuarios</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12 table-data">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión de cuentas de usuarios</h4>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed " id="example">
                            <thead>
                                <tr>
                                    <th style="width: auto">Usuario</th>
                                    <th style="width: auto">Médico</th>
                                    <th style="width: auto">Registro</th>
                                    <th style="width: auto" >Ciudad</th>
                                    <th style="width: auto" >Acceso</th>
                                    <th style="width: auto" >Status</th>
                                    <th style="width: 15%">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                
                                <tr id="<?=$g['medico_id']?>" >
                                    <td class="v-align-middle"><?=$g['usuario_user']?> </td>
                                    <td class="v-align-middle"><?=$g['medico_nombre']?> <?=$g['medico_apellidos']?></td>
                                    <td class="v-align-middle"><?=$g['medico_registro']?></td>
                                    <td class="v-align-middle"><?=$g['medico_ciudad']?></td>
                                    <td class="v-align-middle">
                                        <?php if($g['usuario_status']==''){?>
                                        <span class="label label-success">Activo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <?php }else{?>
                                        <span class="label label-danger">Bloqueado</span>
                                        <?php }?>
                                        
                                    </td>
                                    <td class="v-align-middle">
                                        <?php if($g['usuario_status_eliminado']==''){?>
                                        <span class="label label-success">Activo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <?php }else{?>
                                        <span class="label label-danger">Eliminado</span>
                                        <?php }?>
                                        
                                    </td>
                                    <td class="v-align-middle">
                                        <?php if($g['usuario_status']==''){?>
                                        <i class="fa fa-user-times icono-acciones tip status_usuario pointer" data-accion='Bloqueado' data-id='<?=$g['usuario_id']?>' data-original-title='Bloquear usuario'></i>
                                        <?php }else{?>
                                        <i class="fa fa-unlock icono-acciones tip status_usuario pointer" data-accion='' data-id='<?=$g['usuario_id']?>' data-original-title='Desbloquear usuario'></i>
                                        <?php }?>
                                        &nbsp;
                                        <i class="fa fa-unlock-alt icono-acciones cambiar-pass pointer tip" data-id="<?=$g['usuario_id']?>" data-original-title="Cambiar contraseña"></i>&nbsp;
                                        <?php if($g['usuario_status_eliminado']==''){?>
                                        <i class="fa fa-trash-o icono-acciones eliminar_medico tip pointer" data-accion='hidden' data-original-title="Eliminar médico" data-id="<?=$g['medico_id']?>"></i>
                                        <?php }else{?>
                                        <i class="fa fa-check icono-acciones eliminar_medico tip pointer" data-accion='' data-original-title="Reactivar cuenta de usuario" data-id="<?=$g['medico_id']?>"></i>
                                        <?php }?>
                                        
                                        
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
