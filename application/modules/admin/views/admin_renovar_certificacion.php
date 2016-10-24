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
            <li><a href="#" class="back-history2">Médicos Certificados</a> </li>
            <li><a href="#" class="back-history1">Detalles Médicos</a> </li>
            <li><a href="#" class="active">Renovar Certificación</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-6 col-md-offset-3">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="medicos-recertificacion">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label"><strong>Renovar Certificación para:</strong> <br>DR. <?=$info[0]['medico_nombre']?> <?=$info[0]['medico_apellidos']?></label><br>
                                        <label class="form-label">Registro actual</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_registro" value="<?=$info[0]['medico_registro']?>" class="form-control" readonly="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label">Nuevo Registro</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="medico_nuevo_registro" class="form-control" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top: -10px">
                                                <label class="form-label">Fecha de Certificación</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="medico_fecha_certificacion" class="form-control fecha-calendar" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Documentos Que Acreditan la Certificación</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="file" name="medicos_documentos[]" class="form-control upload-archivo" multiple="" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <input type="hidden" value="<?=$info[0]['medico_id']?>" name="medico_id">
                                        <input type="submit"class="btn btn-cons back-imss btn-add pull-right" value="Guardar">
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
