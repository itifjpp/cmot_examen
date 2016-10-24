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
            <li><a href="#" class="active">Eventos</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión de Eventos </h4>
                        <a href="<?=  base_url()?>admin/agregar_evento?a=add&e=0">
                            <button class="btn btn-cons pull-right back-imss">Agregar Evento</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Evento</th>
                                    <th style="width:auto">Lugar</th>
                                    <th style="width:auto" >Fecha</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['evento_id']?>">
                                    <td class="v-align-middle"><?=$g['evento_nombre']?> </td>
                                    <td class="v-align-middle"><span class="muted"><?=$g['evento_lugar']?></span></td>
                                    <td><span class="muted"><?=$g['evento_fecha']?></span></td>
                                    <td class="text-center">

                                        <a href="<?=  base_url()?>admin/agregar_evento?a=edit&e=<?=$g['evento_id']?>" >
                                            <i class="fa fa-pencil tip icono-acciones" data-original-title="Editar evento"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o del-evento pointer tip icono-acciones" data-original-title="Eliminar evento" data-id="<?=$g['evento_id']?>"></i>
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
