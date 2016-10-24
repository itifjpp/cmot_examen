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
            <li><a href="#" class="active">Configuración</a> </li>
            <li><a href="#" class="active">Configuración de envío de email</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-4 col-centered">
                <div style="width: 100%;background: #F35958;color: white;padding: 5px">
                    La configuración aplica para el envío de email a médicos certificados faltando años, meses o dias.
                </div>
                
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="form-config-email">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="form-group" >
                                        
                                        <label class="form-label">Envio por años&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="radio radio-success pull-right">
                                                <input id="radio_anual_si" type="radio" name="radio_anual" value="Si" >
                                                <label for="radio_anual_si">Si</label>
                                                <input id="radio_anual_no" type="radio" name="radio_anual" value="No" checked="">
                                                <label for="radio_anual_no">No</label>
                                            </div>
                                        </label>
                                        <div class="controls radio_anual hide">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Ejemplo: faltando 3 Años" type="number" name="config_email_tipo_a"  max="4" min="1" value="<?=$email_a[0]['config_email_tiempo']?>">
                                                </div>
                                                <div class="col-md-6 hidden">
                                                    <input class="form-control" placeholder="Ejemplo: 2 Veces" type="number" name="config_email_veces_a"  max="4" min="1" value="<?=$email_a[0]['config_email_veces']?>">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Envio por meses&nbsp;&nbsp;&nbsp;
                                            <div class="radio radio-success pull-right">
                                                <input id="radio_mensual_si" type="radio" name="radio_mensual" value="Si" >
                                                <label for="radio_mensual_si">Si</label>
                                                <input id="radio_mensual_no" type="radio" name="radio_mensual" value="No" checked="checked">
                                                <label for="radio_mensual_no">No</label>
                                            </div>
                                        </label>
                                        <div class="controls radio_mensual hide">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Ejemplo: faltando 3 meses" type="number" name="config_email_tipo_m" value="<?=$email_m[0]['config_email_tiempo']?>" max="11" min="2">
                                                </div>
                                                <div class="col-md-6 hidden">
                                                    <input class="form-control" placeholder="Ejemplo: 2 Veces" type="number" name="config_email_veces_m" value="<?=$email_m[0]['config_email_veces']?>" max="11" min="2">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Envio por días&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="radio radio-success pull-right">
                                                <input id="radio_dias_si" type="radio" name="radio_dias" value="Si" >
                                                <label for="radio_dias_si">Si</label>
                                                <input id="radio_dias_no" type="radio" name="radio_dias" value="No" checked="checked">
                                                <label for="radio_dias_no">No</label>
                                            </div>
                                        </label>
                                        <div class="controls radio_dias hide">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control" placeholder="Ejemplo: faltando 15 Días" type="number" name="config_email_tipo_d" value="<?=$email_d[0]['config_email_tiempo']?>" max="27" min="10">
                                                </div>
                                            </div>
                                            
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
