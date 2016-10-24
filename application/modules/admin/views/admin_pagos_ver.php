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
            <li><a href="<?=  base_url()?>admin/pagos" >Historial de pagos</a> </li>
            <li><a href="#" class="active">Historia de pagos de : <?=$medico[0]['medico_nombre']?> <?=$medico[0]['medico_apellidos']?></a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Historial de pagos de médicos certificados y en procesos</h4>
                        <a href="" class="hidden">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Fecha de pago</th>
                                    <th style="width: auto">Abono</th>
                                    <th style="width:auto">Descripción</th>
                                    <th style="width:auto" >Medio de pago</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['pago_id']?>">
                                    <td class="v-align-middle"><?=$g['pago_fecha']?></td>
                                    <td class="v-align-middle"><?=$g['pago_abono']?></td>
                                    <td class="v-align-middle"><?=$g['pago_descripcion']?></td>
                                    <td class="v-align-middle"><?=$g['pago_medio']?></td>
                                    <td class="text-center">
                                        
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
