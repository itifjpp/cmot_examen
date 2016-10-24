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
            <li><a href="#" class="active">Noticias</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Gestión de noticias para la sección del slider</h4>
                        <a href="<?=  base_url()?>admin/noticias_add?a=add&n=0" class="">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:6%">N°</th>
                                    <th style="width:30%">Titulo</th>
                                    <th style="width:auto" >Descripción</th>
                                    <th style="width:auto" >Fecha de creación</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['noticia_id']?>">
                                    <td class="v-align-middle"><?=$g['noticia_id']?></td>
                                    <td class="v-align-middle"><?=  substr($g['noticia_nombre'], 0,50)?></td>
                                    <td class="v-align-middle"><?=  substr($g['noticia_descripcion'], 0,60)?></td>
                                    <td class="v-align-middle"><?=$g['noticia_fecha']?></td>
                                    <td class="text-center">
                                        <a href="<?=  base_url()?>admin/noticias_add?a=edit&n=<?=$g['noticia_id']?>" >
                                            <i class="fa fa-pencil icono-acciones tip" data-original-title="Editar noticia"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o icono-acciones pointer tip eliminar-noticia" data-original-title="Eliminar noticia" data-id="<?=$g['noticia_id']?>"></i>
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
