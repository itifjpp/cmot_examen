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
            <li><a href="#" class="active">Slider</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12 table-data">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Slider principal</h4>
                        <a href="<?=  base_url()?>admin/agregar_slider?a=add&s=0">
                            <button class="btn btn-cons pull-right back-imss">Agregar slider</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed " id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">N°</th>
                                    <th style="width:30%">Titulo principal</th>
                                    <th style="width:30%">Titulo secundario</th>
                                    <th style="width:auto">Fecha agregada</th>
                                    <th style="width: auto;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['slider_id']?>">
                                    <td class="v-align-middle"><?=$g['slider_id']?> </td>
                                    <td class="v-align-middle"><?=$g['slider_titulo_prin']?></td>
                                    <td class="v-align-middle"><?=$g['slider_titulo_sec']?></td>
                                    <td class="v-align-middle"><?=$g['slider_fecha']?></td>
                                    <td class="v-align-middle">
                                        <a href="<?=  base_url()?>admin/agregar_slider?a=edit&s=<?=$g['slider_id']?>">
                                            <i class="fa fa-pencil icono-acciones"></i>
                                        </a>&nbsp;&nbsp;
                                        <i class="fa fa-trash-o icono-acciones pointer del-slider" data-id="<?=$g['slider_id']?>"></i>
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
