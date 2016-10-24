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
            <li><a href="#" class="active">Casos Clínicos</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Casos Clínicos </h4>
                        <a href="<?=  base_url()?>admin/casosclinicos_add?c=0&a=add">
                            <button class="btn btn-cons pull-right back-imss">Nueva Caso Clínico</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:25%">Caso Clínico</th>
                                    <th style="width:40%">Descripción</th>
                                    <th style="width:auto">Creación</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['pregunta_id']?>">
                                    <td class="v-align-middle"><?=$g['casoclinico_nombre']?> </td>
                                    <td><?=$g['casoclinico_descripcion']?></td>
                                    <td><?=$g['casoclinico_fecha']?> a las <?=$g['casoclinico_hora']?></td>
                                    <td class="text-center">
                                        <a href="<?=  base_url()?>admin/preguntas?cc=<?=$g['casoclinico_id']?>">
                                            <i class="fa fa-plus icono-acciones tip" data-original-title="Agregar Preguntas"></i>
                                        </a>&nbsp;
                                        <a href="<?=  base_url()?>admin/casosclinicos_img?cc=<?=$g['casoclinico_id']?>">
                                            <i class="fa fa-image icono-acciones tip" data-original-title="Agregar Imagenes"></i>
                                        </a>&nbsp;
                                        <a href="<?=  base_url()?>admin/casosclinicos_add?c=<?=$g['casoclinico_id']?>&a=edit" >
                                            <i class="fa fa-pencil tip icono-acciones" data-original-title="Editar"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o del-casoclinico pointer tip icono-acciones" data-original-title="Eliminar" data-id="<?=$g['casoclinico_id']?>"></i>
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
