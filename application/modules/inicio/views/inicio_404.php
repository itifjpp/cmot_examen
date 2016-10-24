<?=  Modules::run('config/get_head')?>
    <div class="main-wrapper back-fondo">
        <div class="main">
            <div class="container">
                <div class="row">
                        <div class="col-sm-6 col-md-offset-3 text-center">
                            <br><br><br><br>
                            <h1 style="font-size: 80px">404 <i class="fa fa-unlink"></i></h1>
                            <br><br>
                            <p class="lead">Lo sentimos , pero la página que estás buscando no existe .</p><br>
                            <a href="<?=  base_url()?>" class="btn  btn-primary">Regresar</a> 
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main -->
    </div><!-- /.main-wrapper -->
<?=  Modules::run('config/get_footer')?>
<script src="<?=  base_url()?>assets/js/inicio.js"></script>
