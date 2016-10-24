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
            <li><a href="#" class="back-history1">Galería</a> </li>
            <li><a href="#" class="active">Categorías</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="span12 col-md-7 col-centered">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>Categorías </h4>
                        <button class="btn btn-cons-add pull-right back-imss">Agregar</button>
                    </div>
                    <div class="grid-body ">
                        <table class="table table-hover table-condensed" id="example">
                            <thead>
                                <tr>
                                    <th style="width:auto">Categoría</th>
                                    <th style="width: auto;" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Categoria as $g):?>
                                <tr id="<?=$g['galeria_id']?>">
                                    <td class="v-align-middle"><span class="muted"><?=$g['categoria_nombre']?></span></td>
                                    <td class="text-center">
                                        <i class="fa fa-trash-o del-categoria pointer tip icono-acciones" data-original-title="Eliminar " data-id="<?=$g['categoria_id']?>"></i>
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
