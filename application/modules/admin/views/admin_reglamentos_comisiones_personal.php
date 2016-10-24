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
            <li><a href="#" >Configuración</a> </li>
            <li><a href="#" class="back-history1">Reglamentos & Comisiones</a> </li>
            <li><a href="#" class="active">Personal</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Personal</h4>
                        <a href="#" class="">
                            <button class="btn btn-cons pull-right back-imss btn-add-personal" data-rc="<?=$_GET['rc']?>">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:30%">Tipo</th>
                                    <th style="width:auto" >Nombre</th>
                                    <th style="width:auto" >Personal</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['rc_personal_id']?>">
                                    <td class="v-align-middle"><?=$g['reglementos_comisiones_tipo']?></td>
                                    <td class="v-align-middle"><?=$g['reglementos_comisiones_nombre']?></td>
                                    <td class="v-align-middle"><?=$g['rc_personal_nombre']?></td>
                                    <td class="text-center">
                                        <i class="fa fa-pencil icono-acciones tip icono-edit-personal pointer" data-id="<?=$g['reglementos_comisiones_id']?>" data-original-title="Editar"></i>&nbsp;
                                        <i class="fa fa-trash-o icono-acciones pointer tip eliminar-rc-personal" data-original-title="Eliminar" data-id="<?=$g['rc_personal_id']?>"></i>
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
<script src="<?=  base_url()?>assets_dash/js/reglementos_comisiones.js" ></script>
