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
            <li><a href="<?=  base_url()?>admin/medicos_tipo?t=p" >Medicos en proceso de certificación</a> </li>
            <li><a href="#" class="active">Asignación de sinodal</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-5 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-sinodal">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Seleccionar estado</label>
                                        <div class="controls">
                                            <select class="select-estados-examen select2" id="select-estados-examen" style="width: 100%"></select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Seleccionar médico</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <select class="select2" id="selec_medico_sinodal" style="width: 100%" name="medico_sinodal">
                                                <option>Seleccionar</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <input type="hidden" name="fecha_envio" class="input-fecha-actual">
                                        <input type="hidden" name="medico_id" value="<?=$_GET['m']?>">
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
