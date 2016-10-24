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
            <li><a href="#" class="active">Historial</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Historial </h4>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Tabla</th>
                                    <th style="width:auto">Acción</th>
                                    <th style="width:40%" >Detalles</th>
                                    <th style="width:auto" >Fecha</th>
                                    <th style="width:auto" >Hora</th>
                                    <th style="width: auto" class="text-center">Detalles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['history_id']?>">
                                    <td class="v-align-middle"><?=$g['history_table']?> </td>
                                    <td class="v-align-middle"><?=$g['history_accion']?> </td>
                                    <td class="v-align-middle"><?=$g['history_detalles']?></td>
                                    <td class="v-align-middle"><?=$g['history_fecha']?></td>
                                    <td class="v-align-middle"><?=$g['history_hora']?></td>
                                    <td class="text-center"><i class="fa fa-question-circle mas-info icono-acciones tip pointer" data-original-title="Más detalles" data-usuario="<?=$g['history_user']?>" data-rol="<?=$g['history_rol']?>"></i></td>
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
