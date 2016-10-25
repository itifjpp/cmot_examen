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
            <li><a href="#" class="active">Usuarios</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Usuarios </h4>
                        <a href="<?=  base_url()?>admin/usuarios/add?a=add&u=0">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Usuario</th>
                                    <th style="width:auto">Nombre</th>
                                    <th style="width:auto" >Apellidos</th>
                                    <th style="width:auto" >RFC</th>
                                    <th style="width:auto" >Registro</th>
                                    <th style="width:auto" >Rol</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['usuario_id']?>">
                                    <td class="v-align-middle"><?=$g['usuario_user']?> </td>
                                    <td class="v-align-middle"><?=$g['usuario_nombre']?> </td>
                                    <td class="v-align-middle"><?=$g['usuario_apellidos']?></td>
                                    <td class="v-align-middle"><?=$g['usuario_rfc']?></td>
                                    <td class="v-align-middle"><?=$g['usuario_registro']?></td>
                                    <td class="v-align-middle"><?=$g['usuario_rol']?></td>
                                    <td class="text-center">

                                        <a href="<?=  base_url()?>admin/usuarios/add?a=edit&u=<?=$g['usuario_id']?>" >
                                            <i class="fa fa-pencil tip icono-acciones" data-original-title="Editar"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o eliminar-admin pointer tip icono-acciones " data-original-title="Eliminar" data-usuario="<?=$g['usuario_id']?>" data-admin="<?=$g['admin_id']?>"></i>
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
<script src="<?=  base_url()?>assets_dash/js/administrador.js" ></script>
