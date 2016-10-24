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
            <li><a href="#" class="back-history1">Médicos Certificados</a> </li>
            <li><a href="#" class="active">Nuevo Médico</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-10 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-medico-certificado">
                            <br><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Nombre</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_nombre" class="form-control" value="<?=$info[0]['medico_nombre']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Telefono</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_telefono" class="form-control" value="<?=$info[0]['medico_telefono']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">RFC</label>
                                        <span class="help">
                                            <i class="fa fa-question-circle icono-acciones tip pointer" data-original-title="El RFC de registro se utilizará como nombre de usuario" style="font-size: 18px"></i>
                                        </span>
                                        <div class="controls">
                                            <input type="text" name="medico_rfc" class="form-control" value="<?=$info[0]['medico_rfc']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Apellidos</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_apellidos" class="form-control" value="<?=$info[0]['medico_apellidos']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div> 
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Email</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="medico_email" class="form-control" value="<?=$info[0]['medico_email']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div> 
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Registro</label>
                                        <span class="help">
                                            <i class="fa fa-question-circle icono-acciones tip pointer" data-original-title="El N° de registro se utilizará como contraseña" style="font-size: 18px"></i>
                                        </span>
                                        <div class="controls">
                                            <input type="text" name="medico_registro" class="form-control" value="<?=$info[0]['medico_registro']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Dirección</label>
                                        <span class="help"><a href="javascript:ventana()" style="color: royalblue">Abrir Mapa <i class="fa fa-map-marker"></i></a></span>
                                        <div class="controls">
                                            <div class="input-with-icon ">                                       
                                                <i class="fa fa-map-marker" style="color: black;opacity: 0.5"></i>
                                                <input type="hidden" class="form-control" name="medico_direccion_lat" value="<?=$info[0]['medico_direccion_lat']?>" id="formLatitud"  style="margin-top: -10px">
                                                <input type="hidden" class="form-control" name="medico_direccion_long"  value="<?=$info[0]['medico_direccion_long']?>" id="formLongitud" style="margin-top: -10px">                                                          
                                                <input type="text" class="form-control" name="medico_direccion" id="formDireccion"  value="<?=$info[0]['medico_direccion']?>" style="margin-top: -10px">                                
                                            </div>
                                        </div>  
                                    </div>     
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Fecha de Certificación</label>
                                        <span class="help"><i class="fa fa-question-circle icono-acciones tip pointer" data-original-title="Fecha de Certificación o de la Última Cetificación Realizada" style="font-size: 18px"></i></span>
                                        <div class="controls">
                                            <input type="text" name="medico_ultima_certificacion" class="form-control fecha-calendar" value="<?=$info[0]['medico_ultima_certificacion']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div> 
                                    <div class="form-group" style="margin-top: 35px!important;">
                                        <div class="controls">
                                            <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                            <input type="hidden" name="medico_id" value="<?=$_GET['m']?>">
                                            <input type="hidden" name="fecha_actual" >
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
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
