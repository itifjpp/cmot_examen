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
            <li><a href="<?=  base_url()?>admin/medicos_tipo?t=c" >Médicos Certificados</a> </li>
            <li><a href="#" class="active">Importar Médicos Certificados</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-5 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="importar-medicos-certificados" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Seleccionar Archivo</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="file" name="file_medicos" class="upload-archivo form-control" required="">
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
