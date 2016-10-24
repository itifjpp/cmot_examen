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
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav nav-tabs form-info-general" id="tab-01">
                        <li class="active"><a href="#informaciondeusuario">Información del usuario</a></li>
                        <li class=""><a href="#informaciondeacceso">Información de acceso</a></li>
                        <li class=" cambiar-img"><a href="#cambiarperfil">Cambiar Perfil</a></li>
                    </ul>
                    <div class="tab-content info-general">
                        <div class="tab-pane active" id="informaciondeusuario">
                            <form id="formInfoGeneral">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Nombre</label>
                                        <div class="controls">
                                            <div class="input-with-icon ">                                       
                                                <i class="fa fa-user" style="color: black;opacity: 0.5"></i>
                                                <input type="text" class="form-control" name="admin_nombre" id="admin_nombre" value="<?=$admin[0]['admin_nombre']?>"  style="margin-top: -10px">                                
                                            </div>
                                        </div>                                                
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Email</label>
                                        <div class="controls">
                                            <div class="input-with-icon ">                                       
                                                <i class="fa fa-envelope-o" style="color: black;opacity: 0.5"></i>
                                                <input type="email" class="form-control" name="admin_email" id="admin_email" value="<?=$admin[0]['admin_email']?>" style="margin-top: -10px">                                
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Dirección</label>
                                        <span class="help"><a href="javascript:ventana()" style="color: royalblue">Abrir Mapa <i class="fa fa-map-marker"></i></a></span>
                                        <div class="controls">
                                            <div class="input-with-icon ">                                       
                                                <i class="fa fa-map-marker" style="color: black;opacity: 0.5"></i>
                                                <input type="hidden" class="form-control" name="formLatitud" id="formLatitud"  style="margin-top: -10px">
                                                <input type="hidden" class="form-control" name="formLongitud" id="formLongitud" style="margin-top: -10px">                                                          
                                                <input type="text" class="form-control" name="admin_direccion" id="formDireccion"  value="<?=$admin[0]['admin_direccion']?>" style="margin-top: -10px">                                
                                            </div>
                                        </div>  
                                    </div>     
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Apellidos</label>
                                        <div class="controls">
                                            <div class="input-with-icon ">                                       
                                                <i class="fa fa-user" style="color: black;opacity: 0.5"></i>
                                                <input type="text" class="form-control" name="admin_apellidos" id="jtfApellidos"value="<?=$admin[0]['admin_apellidos']?>"  style="margin-top: -10px">                                
                                            </div>
                                        </div>  
                                    </div> 
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Telefono</label>
                                        <div class="controls">
                                            <div class="input-with-icon ">                                       
                                                <i class="fa fa-phone" style="color: black;opacity: 0.5"></i>
                                                <input type="tel" class="form-control" name="admin_telefono"  id="jtfTelefono" value="<?=$admin[0]['admin_telefono']?>" style="margin-top: -10px">                                
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Rol</label>
                                        <span class="help" style="color: red" id="Info"></span>
                                        <div class="controls">
                                            <div class="input-with-icon ">                                       
                                                <i class="fa fa-user" style="color: black;opacity: 0.5"></i>
                                                <input type="text" class="form-control" name="jtfRol" value="Administrador" readonly style="margin-top: -10px">                                
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit"  class="btn btn-primary btn-cons pull-right edit-info-save" >Guardar</button>   
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="informaciondeacceso">
                            <div class="row column-seperation">
                                <div class="col-md-6">
                                    <form id="formCambiarContra">
                                        <h4 style="margin-top: -5px">Cambiar Contraseña</h4>
                                        <br>
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label">Nueva Contraseña</label>
                                            <div class="controls">
                                                <div class="input-with-icon ">                                       
                                                    <i class="fa fa-unlock-alt" style="color: black;opacity: 0.5"></i>
                                                    <input type="password"  class="form-control show-pass-c" name="jtfNuevaC" id="jtfNuevaC" required="" style="margin-top: -10px">   
                                                    <div class="progress progress-small" style="margin-top: -3px;">
                                                        <div data-percentage="0%" id="NivelSeguridad" style="width: 0%;"  class="progress-bar progress-bar-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>  
                                        </div>  
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label">Confirmar Contraseña</label>
                                            <div class="controls">
                                                <div class="input-with-icon ">                                       
                                                    <i class="fa fa-unlock-alt" style="color: black;opacity: 0.5"></i>
                                                    <input type="password" class="form-control show-pass-c" name="jtfNuevaC_C" id="jtfNuevaC_C" required="" style="margin-top: -10px">                                
                                                </div>
                                            </div>                                                
                                        </div> 
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label">Contraseña actual</label>
                                            <div class="controls">
                                                <div class="input-with-icon ">                                       
                                                    <i class="fa fa-unlock-alt" style="color: black;opacity: 0.5"></i>
                                                    <input type="hidden" name="formContraOriginal" id="formContraOriginal" value="<?=$usuario[0]['usuario_pass']?>">
                                                    <input type="password" class="form-control show-pass-c" name="jtfContraActual" id="jtfContraActual" required="" style="margin-top: -10px">                                
                                                </div>
                                            </div>                                                
                                        </div> 
                                        <div class="form-group" style="margin-top: 0px;" >
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="checkbox check-success" style="margin-top: 5px">
                                                            <input id="MostrarPass"  type="checkbox">
                                                            <label for="MostrarPass">Mostrar Contraseña</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="hidden" name="usuario_id" value="<?=$usuario[0]['usuario_id']?>">
                                                        <input type="hidden" name="administrador_id" value="<?=$admin[0]['admin_id']?>">
                                                        <button type="submit" class="btn btn-primary btn-con" style="width: 100%;float: right">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>                                                
                                        </div> 

                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form action="" id="formCambiarUser">
                                        <h4 style="margin-top: -5px">Cambiar Usuario</h4>
                                        <br>
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label">Usuario</label>
                                            <div class="controls">
                                                <div class="input-with-icon ">                                       
                                                    <i class="fa fa-user" style="color: black;opacity: 0.5"></i>
                                                    <input type="text" class="form-control" name="formUsuario" disabled="" id="formUsuario" value="<?=$usuario[0]['usuario_user']?>" required="" style="margin-top: -10px">                                
                                                </div>
                                            </div>                                                
                                        </div>
                                        <div class="form-group" style="margin-top: -10px">
                                            <label class="form-label">Nuevo usuario</label>
                                            <div class="controls">
                                                <div class="input-with-icon ">                                       
                                                    <i class="fa fa-user" style="color: black;opacity: 0.5"></i>
                                                    <input type="text" class="form-control" name="formUsuarioNuevo" id="formUsuarioNuevo" required="" style="margin-top: -10px">                                
                                                </div>
                                            </div>                                                
                                        </div>
                                        <div class="form-group" style="margin-top: -10px; ">
                                            <label class="form-label">Contraseña actual</label>
                                            <div class="controls">
                                                <div class="input-with-icon ">                                       
                                                    <i class="fa fa-unlock-alt" style="color: black;opacity: 0.5"></i>
                                                    <input type="password" class="form-control show-pass-u" name="formContraActualU" id="formContraActualU" required="" style="margin-top: -10px">                                
                                                </div>
                                            </div>                                                
                                        </div> 
                                        <div class="form-group" style="margin-top: 0px;" >
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="checkbox check-success" style="margin-top: 5px">
                                                            <input id="MostrarPassUser" type="checkbox">
                                                            <label for="MostrarPassUser">Mostrar Contraseña</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <button type="submit" class="btn btn-primary btn-con" disabled="" id="btnActualizarUser" style="width: 100%;float: right">Guardar</button>

                                                    </div>

                                                </div>
                                            </div>                                                
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="cambiarperfil">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <form id="updatePerfil">
                                    <center>
                                        <div id="retrievingfilename" class="html5imageupload" data-width="300" data-height="300" data-url="<?=  base_url()?>config/upload_image?tipo=assets/img/perfiles/" style="width: 300px;">
                                            <input type="file" name="thumb" style="height: 200px!important">
                                        </div>
                                        <input type="hidden"  name="filename" id="filename" />
                                        <br>  
                                        <button type="submit" class="btn btn-primary btn-con" style="width: 70%">Guardar</button>
                                    </center>

                                    </form>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="nav nav-tabs" id="tab-01">
                        <li class="active"><a href="#tab1hellowWorld">Imagen de perfil actual</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1hellowWorld">
                            <div class="row">
                                <div class="col-md-12 btn-img-perfil" >  
                                    <center>
                                        <br>
                                        <div style="width: 220px;height: 220px;background: url(<?=  base_url()?>assets/img/perfiles/<?=$admin[0]['admin_perfil']?>);background-size: cover;background-position: center" id="img-perfil" class="img-perfil-user"></div>  
                                        <br>
                                        <button type="button" class="btn btn-primary btn-edit-perfil no-display" style="width: 70%;margin-top: -110px;position: relative;">Modificar</button>
                                    </center>
                                    
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>                            
            </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/miperfil.js"></script>