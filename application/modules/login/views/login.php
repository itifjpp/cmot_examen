<?=  Modules::run('config/get_head')?>
    <div class="main-wrapper back-fondo">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="company-card" style="background: white" >
                            <div class="company-card-image">  
                                <span style="width: 100%;;padding: 8px;font-size: 15px;color: white!important;background: #02344A" class="estado-delegado">
                                    Iniciar sesión
                                </span>
                                <form class="form-login"><br><br>
                                    <div class="form-group text-left input-icon">
                                        <i class="fa fa-user"></i>
                                        <label for="form-login-username">Usuario</label>
                                        <input type="text" class="form-control" required="" name="txtuser">
                                    </div><!-- /.form-group -->
                                    <div class="form-group text-left input-icon">
                                        <i class="fa fa-unlock-alt"></i>
                                        <label for="form-login-password">Contraseña</label>
                                        <input type="password" class="form-control" required="" name="txtpass">
                                    </div><!-- /.form-group -->
                                    <div class="checkbox text-left">
                                        <label style="font-size: 10px!important"><input type="checkbox" checked="" > Recordarme</label>
                                        <a href="<?=  base_url()?>login/reset_pass" class="no-decoration pull-right" style="font-size: 10px!important;color: black;margin-top: 5px">¿Olvide mi contraseña?</a>
                                    </div><!-- /.checkbox -->
                                    <div class="form-group" style="margin-bottom: -10px">
                                        <br>
                                        <input type="hidden" name="usuario_ultimo_acceso" class="form-control">
                                        <input type="hidden" name="usuario_ultimo_acceso_hora" class="form-control">
                                        <button type="submit" class="btn btn-secondary btn-block" style="background: #02344A"> <i class="fa fa-spinner fa-spin hidden"></i> Acceder</button>
                                    </div><!-- /.form-group -->

                                </form>
                            </div><!-- /.company-card-image -->
                        </div><!-- /.company-card -->
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

        </div><!-- /.main -->
    </div><!-- /.main-wrapper -->
<?=  Modules::run('config/get_footer')?>
<script src="<?=  base_url()?>assets/js/inicio.js"></script>
<script src="<?=  base_url()?>assets/js/inicio_medicos.js"></script>
