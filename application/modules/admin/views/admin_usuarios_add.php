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
            <li><a href="#" class="back-history1">Usuarios</a> </li>
            <li><a href="#" class="active">Nuevo Usuario</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-8 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registrar-usuario">
                            <div class="row">
                                <br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">Nombre</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="usuario_nombre" class="form-control" value="<?=$info[0]['usuario_nombre']?>" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">RFC</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="usuario_rfc" class="form-control" value="<?=$info[0]['usuario_rfc']?>" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">Rol</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <select class="select2" name="usuario_rol" style="width: 100%;margin-top: -10px">
                                                        <option value="Medico">Medico</option>
                                                        <option value="Administrador">Administrador</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">Contraseña</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="password" name="usuario_pass" class="form-control" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">Apellidos</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="usuario_apellidos" class="form-control" value="<?=$info[0]['usuario_apellidos']?>" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">Registro</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="usuario_registro" class="form-control" value="<?=$info[0]['usuario_registro']?>" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">Usuario</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="usuario_user" class="form-control" value="<?=$info[0]['usuario_user']?>" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top: -5px">
                                                <label class="form-label">Confirmar Contraseña</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="password" name="usuario_pass_c" class="form-control" required="" style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="controls">
                                                    <br>
                                                    <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                                    <input type="hidden" name="usuario_id" value="<?=$_GET['u']?>">
                                                    <input type="submit"class="btn btn-cons back-imss btn-add pull-right" value="Guardar">
                                                </div>
                                            </div>
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
<script src="<?=  base_url()?>assets_dash/js/administrador.js" ></script>
