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
            <li><a href="#" class="">Configuración</a> </li>
            <li><a href="#" class="active">Administradores</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Administradores </h4>
                        <a href="<?=  base_url()?>admin/administrador_add?a=add&admin=0">
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
                                    <th style="width:auto" >Telefono</th>
                                    <th style="width:auto" >Email</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['admin_id']?>">
                                    <td class="v-align-middle"><?=$g['usuario_user']?> </td>
                                    <td class="v-align-middle"><?=$g['admin_nombre']?> </td>
                                    <td class="v-align-middle"><?=$g['admin_apellidos']?></td>
                                    <td class="v-align-middle"><?=$g['admin_telefono']?></td>
                                    <td class="v-align-middle"><?=$g['admin_email']?></td>
                                    <td class="text-center">

                                        <a href="<?=  base_url()?>admin/administrador_add?a=edit&admin=<?=$g['admin_id']?>" >
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
