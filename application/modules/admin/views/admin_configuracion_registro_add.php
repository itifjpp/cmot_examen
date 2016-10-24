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
            <li><a href="#">Medicos</a> </li>
            <li><a href="<?=  base_url()?>admin/configuracion_registro" class="active">Configuración de fecha de registros</a> </li>
            <li><a href="#">Nuevo registro</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-4 col-md-offset-4">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-config">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Fecha inicio de apertura</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="conf_registro_fecha_i" value="<?=$config[0]['conf_registro_fecha_i']?>" class="form-control fecha-calendar" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Fecha cierre de apertura</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="conf_registro_fecha_f" value="<?=$config[0]['conf_registro_fecha_f']?>" class="form-control fecha-calendar" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <input type="hidden" value="<?=$_GET['a']?>" name="accion">
                                        <input type="hidden" value="<?=$_GET['cr']?>" name="conf_registro_id">
                                        <input type="hidden" value="" name="fecha_actual" class="input-fecha_yyyy_mm_dd">
                                        <input type="submit"class="btn btn-cons back-imss btn-add" value="Guardar">
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
<script src="<?=  base_url()?>assets_dash/js/config.js" ></script>
