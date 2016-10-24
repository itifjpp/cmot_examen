<?=  Modules::run('config/get_head')?>
    <div class="main-wrapper back-fondo">
        <div class="main">
            <div class="container">
                <div class="row">
                    <?php 
                    $hoy= str_replace('-', '/', $config[0]['conf_registro_hoy']);
                    if(!empty($config) && strtotime($hoy)==  strtotime($config[0]['conf_registro_fecha_i'])){   
                    ?>
                    <div class="col-md-6 col-md-offset-2 ">
                        <div class="company-card" style="background: white" >
                            <div class="company-card-image">  
                                <span style="width: 100%;;padding: 8px;font-size: 15px;color: white!important;background: #02344A" class="estado-delegado">
                                    Crear cuenta
                                </span>
                                <form class="form-register"><br><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group text-left input-icon">
                                                <i class="fa fa-user"></i>
                                                <label for="form-login-username">Nombre</label>
                                                <input type="text" class="form-control" required="" placeholder="Nombre" name="medico_nombre">
                                            </div><!-- /.form-group --> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-left input-icon">
                                                <i class="fa fa-user"></i>
                                                <label for="form-login-username">Apellidos</label>
                                                <input type="text" class="form-control" required="" placeholder="Apellidos" name="medico_apellidos">
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group text-left input-icon">
                                                <i class="fa fa-envelope"></i>
                                                <label for="form-login-username">Email</label>
                                                <input type="text" class="form-control" required="" placeholder="Email" name="medico_email">
                                            </div><!-- /.form-group -->   
                                            <div class="form-group text-left input-icon">
                                                <i class="fa fa-user-secret "></i>
                                                <label for="form-login-username">Usuario</label>
                                                <input type="text" class="form-control" placeholder="Usuario" id="usuario_user_check" required="" name="usuario_user">
                                            </div><!-- /.form-group -->       
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-left input-icon">
                                                <i class="fa fa-unlock-alt"></i>
                                                <label for="form-login-password">Contraseña</label>
                                                <input type="password" class="form-control" placeholder="Contraseña" required="" name="usuario_pass">
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-left input-icon">
                                                <i class="fa fa-unlock-alt"></i>
                                                <label for="form-login-password">Confirmar Contraseña</label>
                                                <input type="password" class="form-control" required="" placeholder="Confirmar Contraseña" name="usuario_pass_c">
                                                <i class="fa fa-unlock-alt ver-password pointer hidden" style="position: absolute;right: 0px;font-size: 22px;top: 3px"></i>
                                            </div><!-- /.form-group -->
                                            <button type="submit" class="btn btn-secondary btn-block pull-right btn-cambiar-user" style="background: #02344A;">Registrarme</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.company-card-image -->
                        </div><!-- /.company-card -->
                    </div><!-- /.col-sm-4 -->
                    <div class="col-md-4">
                        <h5 style="margin-top: 0px"><strong>El formulario de registro para la certificación de medicos inicio</strong></h5>
                        <br>
                        <h5><strong>Fecha de apertura: &nbsp;&nbsp;</strong><strong><?=$config[0]['conf_registro_fecha_i']?> </strong></h5>
                        <h5><strong>Fecha de cierre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong><?=$config[0]['conf_registro_fecha_f']?> </strong></h5>
                        <br>
                        <h5 class="text-left">El formuario de registro se cierra en:  <strong><?=$config[0]['conf_registro_falta_mm'].' Meses'?> <?=$config[0]['conf_registro_falta_dd'].' Dias'?></strong> </h5>
                        <h5 class="text-left"></h5>
                    </div>
                    <?php }else{?>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>Le fecha de registro para la certificación aun no esta abierta</h3>
                    </div>
                    <?php }?>
                </div><!-- /.row -->
            </div><!-- /.container -->

        </div><!-- /.main -->
    </div><!-- /.main-wrapper -->
<?=  Modules::run('config/get_footer')?>
<script src="<?=  base_url()?>assets/js/inicio.js"></script>
<script src="<?=  base_url()?>assets/js/inicio_medicos.js"></script>
