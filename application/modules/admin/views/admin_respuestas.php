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
            <li><a href="#" class="back-history2">Casos Clínicos</a> </li>
            <li><a href="#" class="back-history1">Preguntas</a> </li>
            <li><a href="#" class="active">Respuestas</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <a href="<?=  base_url()?>admin/respuestas_add?r=0&a=add&p=<?=$_GET['preg']?>">
                            <button class="btn btn-cons pull-right back-imss">Nueva Respuesta</button>
                        </a>
                        <h4 class="semi-bold">Pregunta: <?=  $pregunta[0]['pregunta_nombre']?> ...</h4>
                        
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:60%">Respuesta</th>
                                    <th style="width:auto">Correcto</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['respuesta_id']?>">
                                    <td class="v-align-middle"><?=$g['respuesta_nombre']?> </td>
                                    <td>
                                        <?php if($g['respuesta_valor']=='1'){?>
                                        Correcto
                                        <?php }else{?>
                                        Incorrecto
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        
                                        <a href="<?=  base_url()?>admin/respuestas_add?r=<?=$g['respuesta_id']?>&a=edit&p=<?=$_GET['preg']?>" >
                                            <i class="fa fa-pencil tip icono-acciones" data-original-title="Editar Respuesta"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o del-respuestas pointer tip icono-acciones" data-original-title="Eliminar Respuesta" data-id="<?=$g['respuesta_id']?>"></i>
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
<script src="<?=  base_url()?>assets_dash/js/examen.js" ></script>
