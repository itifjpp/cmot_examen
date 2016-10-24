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
            <li><a href="#" class="back-history1">Resultados de Evaluación</a> </li>
            <li><a href="#" class="active"><?=$info[0]['medico_nombre']?> <?=$info[0]['medico_apellidos']?></a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Reultados de Evaluación</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grid-body ">
                            <table class="table table-hover table-condensed footable" data-filter=".filter-data"   data-paging="true" data-page-size="6">
                                <thead>
                                    <tr>
                                        <th style="width: 15%">Caso Clínico</th>
                                        <th style="width: 45%">Pregunta</th>
                                        <th>Respuesta</th>
                                        <th style="width: 13%">Resultado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $total_preg=  count($total_preg);
                                        $correctas;
                                        $puntos_finales=0;
                                        foreach ($Gestion as $value): 
                                            $i++;
                                    ?>
                                    <tr id="<?=$value['pregunta_id']?>">
                                        <td><?=$value['casoclinico_nombre']?></td>
                                        <td><?=$value['pregunta_nombre']?></td>
                                        <td><?=$value['respuesta_nombre']?></td>
                                        <td>
                                            <?php 
                                            if($value['respuesta_valor']=='1'){
                                                $correctas=$correctas+1;
                                                $puntos_finales=$puntos_finales+2;
                                                echo '<span class="label label-success" style="">Correcto</span>';
                                            }else{
                                                echo '<span class="label label-danger" style="">Incorecto</span>';
                                            }

                                            ?>

                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <tfoot >
                                    <tr>
                                        <td colspan="10">
                                            <div class="col-md-12" style="margin-top: 25px;">
                                                <center>
                                                    <ul class="pagination pagination-centered width-100"></ul>
                                                </center>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="grid-body">
                            <div class="row">
                                
                                <div class="col-md-5">
                                    <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert"></button>
                                        <h6><strong> Médico: </strong><?=$info[0]['medico_nombre']?> <?=$info[0]['medico_apellidos']?></h6>
                                        <h6><strong> RFC:</strong> <?=$info[0]['medico_rfc']?></h6>
                                        <h6><strong> Email:</strong> <?=$info[0]['medico_email']?></h6><br>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    
                                    
                                    <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert"></button>
                                        <h5 style="color: #337AB7;font-weight: 400" class="text-left">Resultado: <?=$correctas?> Respuestas correctas de <?=$total_preg?> preguntas</h5>
                                        <h4 style="color: #337AB7;font-weight: 400" class="text-left"> Puntaje Total: <?=$puntos_finales?> Puntos</h4>
                                        <h4 style="color: #337AB7;font-weight: 400" class="text-left"> Puntaje  %: <?php echo number_format(($correctas * 10) / $total_preg,1)?></h4>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/examen.js" ></script>
