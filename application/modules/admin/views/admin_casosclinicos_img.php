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
            <li><a href="#" class="active">Imagenes</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="col-md-7">
                <div class="span12">
                    <div class="grid simple ">
                        <div class="grid-title">
                            <h4>Imagenes </h4>
                        </div>
                        <div class="grid-body ">
                            <table class="table table-hover table-condensed" id="example">
                                <thead>
                                    <tr>
                                        <th style="width:25%">Imagen</th>
                                        <th style="width: auto;" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Gestion as $g):?>
                                    <tr id="<?=$g['casoclinico_img_id']?>">
                                        <td class="v-align-middle"><?=$g['casoclinico_img']?> </td>
                                        <td class="text-center">
                                            <i class="fa fa-trash-o del-casoclinico-img pointer tip icono-acciones" data-original-title="Eliminar" data-id="<?=$g['casoclinico_id']?>"></i>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-imagenes-cc">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Seleccionar imagen</label>
                                        <div class="form-group" style="margin-top: 0px">
                                            <div id="retrievingfilename" class="html5imageupload" data-width="580" data-height="350" data-url="<?=  base_url()?>config/upload_image?tipo=assets_dash/img/casosclinicos" style="width: 100%;">
                                                <input type="file" name="thumb" style="height: 200px!important">
                                            </div>
                                            <input type="hidden"  name="casoclinico_img" id="filename" class="form-control" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <div class="controls">
                                            <input type="hidden" name="casoclinico_id" value="<?=$_GET['cc']?>">
                                            <input type="submit"class="btn btn-cons back-imss btn-add pull-right" value="Guardar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/examen.js" ></script>
