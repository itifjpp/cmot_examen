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
            <li><a href="#" class="back-history1">Casos Clínicos</a> </li>
            <li><a href="#" class="active">Preguntas</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión Preguntas </h4>
                        <a href="<?=  base_url()?>admin/preguntas_add?p=0&a=add&cc=<?=$_GET['cc']?>">
                            <button class="btn btn-cons pull-right back-imss">Nueva Pregunta</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:80%">Pregunta</th>
                                    <th style="width:auto">Img</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['pregunta_id']?>">
                                    <td class="v-align-middle"><?=$g['pregunta_nombre']?> </td>
                                    <td><span class="muted"></span></td>
                                    <td class="text-center">
                                        <a href="<?=  base_url()?>admin/respuestas?preg=<?=$g['pregunta_id']?>">
                                            <i class="fa fa-wpforms icono-acciones tip" data-original-title="Agregar respuestas"></i>
                                        </a>&nbsp;
                                        <a href="<?=  base_url()?>admin/preguntas_add?p=<?=$g['pregunta_id']?>&a=edit&cc=<?=$_GET['cc']?>" >
                                            <i class="fa fa-pencil tip icono-acciones" data-original-title="Editar Pregunta"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o del-preguntas pointer tip icono-acciones" data-original-title="Eliminar Pregunta" data-id="<?=$g['pregunta_id']?>"></i>
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
