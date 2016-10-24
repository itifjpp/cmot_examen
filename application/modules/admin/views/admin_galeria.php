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
            <li><a href="#" class="">Configuración</a> </li>
            <li><a href="#" class="active">Galería</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Galería de imagenes </h4>
                        <a href="<?=  base_url()?>admin/galeria_add?a=add&i=0">
                            <button class="btn btn-cons pull-right back-imss">Agregar</button>
                        </a>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">N°</th>
                                    <th style="width:auto">IMG</th>
                                    <th style="width:auto">Titulo</th>
                                    <th style="width:auto" >Registro</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gestion as $g):?>
                                <tr id="<?=$g['galeria_id']?>">
                                    <td class="v-align-middle"><?=$g['galeria_id']?> </td>
                                    <td class="v-align-middle"><span class="muted"><?=$g['galeria_img']?></span></td>
                                    <td class="v-align-middle"><span class="muted"><?=$g['galeria_titulo']?></span></td>
                                    <td><span class="muted"><?=$g['galeria_registro']?></span></td>
                                    <td class="text-center">
                                        <a href="<?=  base_url()?>admin/galeria_add?a=edit&i=<?=$g['galeria_id']?>">
                                            <i class="fa fa-pencil icono-acciones"></i>
                                        </a>&nbsp;
                                        <i class="fa fa-trash-o del-galeria pointer tip icono-acciones" data-original-title="Eliminar Imagen" data-id="<?=$g['galeria_id']?>"></i>
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
<script src="<?=  base_url()?>assets_dash/js/galeria.js" ></script>
