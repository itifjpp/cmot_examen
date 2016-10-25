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
            <div class="col-md-12">
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
                                            <img src="<?=  base_url()?>assets_dash/img/casosclinicos/<?=$g['casoclinico_img']?>" style="width: 20px;height: 20px;margin-top: -10px"  class="zoom_img_pregunta">&nbsp;
                                            <a href="<?=  base_url()?>assets_dash/img/casosclinicos/<?=$g['casoclinico_img']?>" target="_blank">
                                                <i class="fa fa-share icono-acciones"></i>
                                            </a>&nbsp;
                                            <i class="fa fa-trash-o del-casoclinico-img pointer tip icono-acciones" data-original-title="Eliminar" data-id="<?=$g['casoclinico_img_id']?>"></i>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <div class="row">
                            <form action="<?=  base_url()?>admin/casosclinicos_img" method="GET">
                                <div class="col-md-2 col-md-offset-3">
                                    <div class="form-group">
                                        <input type="text" value="<?=$_GET['data_width']?>" name="data_width" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" value="<?=$_GET['data_height']?>" name="data_height" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="hidden" name="cc" value="<?=$_GET['cc']?>">
                                        <button type="submit" class="btn btn-primary">Aplicar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php if($_GET['data_width']){?>
                        <form class="registro-imagenes-cc">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <center>
                                    <div class="form-group" style="margin-top: -10px">
                                        <div class="form-group" style="margin-top: 0px">
                                            <div class="html5imageupload" data-width="<?=$_GET['data_width']?>" data-height="<?=$_GET['data_height']?>" data-url="<?=  base_url()?>config/upload_image?tipo=assets_dash/img/casosclinicos" style="width: <?=$_GET['data_width']?>px;height: <?=$_GET['data_height']?>px;">
                                                <input type="file" name="thumb" style="height: 200px!important">
                                            </div>
                                            <input type="hidden"  name="casoclinico_img" id="filename" class="form-control" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <div class="controls">
                                            <input type="hidden" name="casoclinico_id" value="<?=$_GET['cc']?>">
                                            <input type="submit"class="btn btn-cons back-imss btn-add" style="width: 30%" value="Guardar">
                                        </div>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script>
  $(document).ready(function(e){
        $('body .zoom_img_pregunta').elevateZoom({
            constrainType:"height", 
            constrainSize:274, 
            zoomType: "lens", 
            ontainLensZoom: true, 
            gallery:'gallery_01', 
            cursor: 'pointer', 
            galleryActiveClass: "active"});   
  })    
</script>

<script src="<?=  base_url()?>assets/plugins/elevatezoom-master/jquery.elevatezoom.js"></script>
<script src="<?=  base_url()?>assets_dash/js/examen.js" ></script>
