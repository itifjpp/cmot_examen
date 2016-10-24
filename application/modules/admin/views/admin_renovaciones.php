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
            <li><a href="#">Médicos</a></li>
            <li><a href="#" class="active">Renovaciones en proceso y finalizadas</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Renovaciones en proceso y finalizadas</h4>
                        <a href="" class="hidden">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Médico</th>
                                    <th style="width:auto" >Fecha inicio</th>
                                    <th style="width:auto" >Fecha finalización</th>
                                    <th style="width:auto" >Puntos obtenidos</th>
                                    <th style="width:auto" >Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['cmo_medico_id']?>">
                                    <td class="v-align-middle"><?=$g['medico_nombre']?> <?=$g['medico_apellidos']?></td>
                                    <td class="v-align-middle"><?=$g['medico_rfc']?></td>
                                    <td class="v-align-middle"><?=$g['renovacion_c_fecha_i']?></td>
                                    <td class="v-align-middle"><?=$g['renovacion_c_fecha_f']?></td>
                                    <td class="v-align-middle"><?=$g['renovacion_c_puntos']?></td>
                                    <td class="v-align-middle"><?=$g['renovacion_c_status']?></td>
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
