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
            <li><a href="#" class="active">Nuevo Caso Clínico</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-5 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-casoclinico">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Caso Clínico</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <textarea name="casoclinico_nombre" class="form-control" rows="2" required=""><?=$info[0]['casoclinico_nombre']?></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Descripción Breve</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <textarea name="casoclinico_descripcion" class="form-control" rows="4" required=""><?=$info[0]['casoclinico_descripcion']?></textarea>
                                            
                                        </div>
                                    </div>
  
                                    <div class="form-group ">
                                        <div class="controls">
                                            <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                            <input type="hidden" name="casoclinico_id" value="<?=$_GET['c']?>">
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
