<?=  Modules::run('config/get_head')?>
    <div class="main-wrapper back-fondo">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div class="company-card" style="background: white" >
                            <div class="company-card-image">  
                                <span style="width: 100%;;padding: 8px;font-size: 15px;color: white!important;background: #02344A" class="estado-delegado">
                                    Cambiar Contraseña
                                </span>
                                 <form class="form-update-pass"><br><br>
                                    <div class="form-group text-left input-icon"> 
                                        <label for="form-login-username">Nueva Contraseña</label>
                                        <i class="fa fa-unlock-alt"></i>
                                        <input type="password" class="form-control" required="" name="new_pass">
                                    </div><!-- /.form-group -->
                                    <div class="form-group text-left input-icon" >
                                        <label for="form-login-password">Confirmar Contraseña</label>
                                        <i class="fa fa-unlock-alt"></i>
                                        <input type="password" class="form-control" required="" name="usuario_pass">
                                        <input type="hidden" name="usuario_email" value="<?=  base64_decode($_GET['e'])?>"> 
                                        <input type="hidden" name="usuario_fecha" class="input-fecha-actual">
                                        <input type="hidden" name="usuario_id" value="<?=  base64_decode($_GET['u'])?>"> 
                                    </div><!-- /.form-group -->
                                    <div class="form-group" style="margin-bottom: -10px">
                                        
                                        <button type="submit" class="btn btn-secondary btn-block" style="background: #02344a">Guardar</button>
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
