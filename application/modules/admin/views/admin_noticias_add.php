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
            <li><a>Inicio</a></li>
            <li><a>Configuración</a></li>
            <li><a href="<?=  base_url()?>admin/noticias" >Noticias</a> </li>
            <li><a href="#" class="active">Agregar</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-7 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-noticias" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Nombre de la noticia</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="noticia_nombre" value="<?=$info[0]['noticia_nombre']?>" class="form-control" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Agregar anexos</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="file" name="noticias_anexos[]" multiple="" class="upload-archivo form-control" >
                                        </div>
                                    </div>
                                    <?php if(!empty($anexos)){?>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Anexos actuales</label>
                                        <div class="row">
                                            <?php foreach ($anexos as $value) {?>
                                            <div class="col-md-4" id="<?=$value['noticia_anexo_id']?>_anexo">
                                                <?=$value['noticia_anexo']?>
                                                <a href="<?=  base_url()?>assets/noticias/<?=$value['noticia_anexo']?>" target="_blank"> <i class="fa fa-share"></i></a>&nbsp;
                                                <i class="fa fa-trash-o pointer eliminar-anexo-noticia" data-id="<?=$value['noticia_anexo_id']?>"></i>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>              
                                    <?php }?>
                                    <div class="form-group hidden" style="margin-top: -10px">
                                        <label class="form-label">Fecha</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="hidden" name="noticia_fecha"  class="form-control input-fecha-actual" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Descripción</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                            <input type="hidden" name="noticia_id" value="<?=$_GET['n']?>">
                                            <textarea class="form-control text-editor" name="noticia_descripcion" style="margin-top: -10px" rows="5" placeholder="Descripción"><?=$info[0]['noticia_descripcion']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <button class="btn back-imss pull-right" type="submit">Guardar</button>
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
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
