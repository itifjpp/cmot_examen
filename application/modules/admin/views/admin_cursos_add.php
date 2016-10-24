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
            <li><a href="#" class="back-history1">Cursos</a> </li>
            <li><a href="#" class="active">Nuevo curso</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form id="registro-curso">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -5px">
                                        <label class="form-label">Curso</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="curso_nombre" class="form-control" value="<?=$curso[0]['curso_nombre']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -5px">
                                        <label class="form-label">Lugar</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="curso_lugar" class="form-control" value="<?=$curso[0]['curso_lugar']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -5px">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Fecha</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="curso_fecha" class="form-control fecha-calendar" value="<?=$curso[0]['curso_fecha']?>"  style="margin-top: -10px">
                                                </div>       
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Puntos</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="curso_puntos" class="form-control"  value="<?=$curso[0]['curso_puntos']?>"  style="margin-top: -10px">
                                                </div>       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -5px">
                                        <label class="form-label">LInk externo</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="curso_link" class="form-control" value="<?=$curso[0]['curso_link']?>" placeholder="http://cmot.com.mx/curso/1" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <div id="retrievingfilename" class="html5imageupload" data-width="580" data-height="350" data-url="<?=  base_url()?>config/upload_image?tipo=assets/img/cursos" style="width: 100%;">
                                            <input type="file" name="thumb" style="height: 200px!important">
                                        </div>
                                        <input type="hidden"  name="curso_img" id="filename" value="<?=$curso[0]['curso_img']?>" class="form-control" />
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Descripción</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <textarea name="curso_descripcion" class="form-control" rows="4"><?=$curso[0]['curso_descripcion']?></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="controls">
                                            <br>
                                            <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                            <input type="hidden" name="curso_id" value="<?=$_GET['c']?>">
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
<script src="<?=  base_url()?>assets_dash/js/cursos.js" ></script>
