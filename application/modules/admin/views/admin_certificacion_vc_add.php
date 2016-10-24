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
            <li><a href="#" class="">Médicos</a> </li>
            <li><a href="<?=  base_url()?>admin/certificacion_vc" class="">Certificacion vía curricular</a> </li>
            <li><a href="#" class="active">Nuevo</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-7 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-medico-vc">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Nombre</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_cvc_nombre" value="<?=$info[0]['medico_cvc_nombre']?>" class="form-control" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Rfc</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_cvc_rfc" value="<?=$info[0]['medico_cvc_rfc']?>" class="form-control" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Email</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_cvc_email" value="<?=$info[0]['medico_cvc_email']?>" class="form-control" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Apellidos</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_cvc_apellidos" value="<?=$info[0]['medico_cvc_apellidos']?>" class="form-control" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Registro</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_cvc_registro" value="<?=$info[0]['medico_cvc_registro']?>" class="form-control" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -5px">
                                        <br>
                                        <input type="hidden" value="<?=$_GET['a']?>" name="accion">
                                        <input type="hidden" value="<?=$_GET['m']?>" name="medico_cvc_id">
                                        <input type="hidden" value="" name="medico_cvc_fecha" class="input-fecha-actual">
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
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
