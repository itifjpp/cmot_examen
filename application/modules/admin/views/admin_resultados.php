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
            <li><a href="#" class="">Exámen</a> </li>
            <li><a href="#" class="active">Resultados de Evaluación</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="col-md-8 col-centered" >
                <div class="span12">
                    <div class="grid simple ">
                        <div class="grid-title">
                            <h4>Resultados de Evaluación</h4>
                        </div>
                        <div class="grid-body ">
                            <table class="table table-hover table-condensed" id="example">
                                <thead>
                                    <tr>
                                        <th style="width:auto">N° Usuario</th>
                                        <th style="width:auto">RFC</th>
                                        <th style="width: auto;" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Gestion as $g):?>
                                    <tr id="<?=$g['usuario_id']?>">
                                        <td class="v-align-middle"><?=$g['usuario_id']?> </td>
                                        <td><span class="muted"><?=$g['usuario_rfc']?></span></td>
                                        <td class="text-center">
                                            
                                            <a href="<?=  base_url()?>admin/resultados_usuario?u=<?=$g['usuario_id']?>" >
                                                <i class="fa fa-share tip icono-acciones" data-original-title="Ver resultados de rvaluación"></i>
                                            </a>&nbsp;
                                            <i class="fa fa-trash-o icono-acciones eliminar-evaluacion pointer tip" data-id="<?=$g['usuario_id']?>" data-original-title="Elimiar evaluación de este médico"></i>
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
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/examen.js" ></script>
