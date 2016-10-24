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
            <li><a href="#" class="active">Médicos</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión de Médicos </h4>
                        <a href="">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Usuario</th>
                                    <th style="width:auto">Médico</th>
                                    <th style="width:auto">Registro</th>
                                    <th style="width:auto" >Ciudad</th>
                                    <th style="width:auto" >RFC</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['evento_id']?>">
                                    <td class="v-align-middle"><?=$g['usuario_user']?> </td>
                                    <td class="v-align-middle"><?=$g['medico_nombre']?> <?=$g['medico_apellidos']?></td>
                                    <td class="v-align-middle"><?=$g['medico_registro']?></td>
                                    <td class="v-align-middle"><?=$g['medico_ciudad']?></td>
                                    <td class="v-align-middle"><?=$g['medico_rfc']?></td>
                                    <td class="text-center">

                                        <a href="#" >
                                            <i class="fa fa-pencil tip" data-original-title="Editar evento"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o pointer tip" data-original-title="Eliminar evento" data-id="<?=$g['evento_id']?>"></i>
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
<script src="<?=  base_url()?>assets_dash/js/eventos.js" ></script>
