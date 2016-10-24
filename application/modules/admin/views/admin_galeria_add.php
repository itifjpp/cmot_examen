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
            <li><a href="#" class="active">Nuevo Galería</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-8 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registrar-galeria">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Titulo</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="galeria_titulo" class="form-control" value="<?=$info[0]['galeria_titulo']?>" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="col-md-9" style="padding: 0px">
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label">Categoría</label>
                                            <span class="help"></span>
                                            <div class="controls">
                                                <select name="galeria_categoria[]" multiple="" class="width100 select2" id="galeria_categoria" style="width: 100%">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <br>
                                        <a href="<?=  base_url()?>admin/galeria_categoria">
                                            <button class="add-categoria  btn btn-primary" type="button" style="margin-top: 7px">Agregar Categoría</button>
                                        </a>
                                    </div>
                                    
                                    <div class="form-group" style="margin-top: -10px">
                                        <div id="retrievingfilename" class="html5imageupload" data-width="580" data-height="350" data-url="<?=  base_url()?>config/upload_image?tipo=assets/img/galeria" style="width: 100%;">
                                            <input type="file" name="thumb" style="height: 200px!important">
                                        </div>
                                        <input type="hidden"  name="galeria_img" id="filename" value="<?=$info[0]['galeria_img']?>" class="form-control" />
                                    </div>
                                    
                                </div>
                                <div class="col-md-12" style="margin-top: -10px">
                                    <div class="form-group ">
                                        <div class="controls">
                                            <input type="hidden" name="galeria_value" value="<?=$info[0]['galeria_categoria_all']?>">
                                            <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                            <input type="hidden" name="galeria_registro" class="input-fecha-actual">
                                            <input type="hidden" name="galeria_id" value="<?=$_GET['i']?>">
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
<script src="<?=  base_url()?>assets_dash/js/galeria.js" ></script>
