<?=  Modules::run('config/get_head')?>
    <div class="main-wrapper back-fondo">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div class="company-card" style="background: white" >
                            <div class="company-card-image">  
                                <span style="width: 100%;;padding: 8px;font-size: 15px;color: white!important;background: #02344A" class="estado-delegado">
                                    Recuperación de contraseña
                                </span>
                                <form class="form-reset-pass"><br><br>
                                    <div class="form-group text-left input-icon"> 
                                        <label for="form-login-username">Usuario</label>
                                        <i class="fa fa-user"></i>
                                        <input type="text" class="form-control" required="" name="txtuser" autocomplete="off">
                                    </div><!-- /.form-group -->
                                    <div class="form-group text-left input-icon" >
                                        <label for="form-login-password">Email</label>
                                        <i class="fa fa-envelope-o"></i>
                                        <input type="text" class="form-control" required="" name="txtmail" autocomplete="off">
                                    </div><!-- /.form-group -->
                                    <div class="form-group" style="margin-bottom: -10px">
                                        
                                        <button type="submit" class="btn btn-secondary btn-block" style="background: #02344a"><i class="fa fa-spinner fa-pulse icon-esperar hidden"></i>Continuar</button>
                                    </div><!-- /.form-group -->

                                </form>
                                <form class="form-update-pass hidden"><br><br>
                                    <div>
                                        Verifique su email, hemos enviado un enlace para cambiar su contraseña<br>
                                        <br><br>
                                        <a href="<?=  base_url()?>login">Regresar</a>
                                    </div>

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
