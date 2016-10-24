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
            <li><a href="#" class="back-history1">Eventos</a> </li>
            <li><a href="#" class="active">Nuevo evento</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-10 col-centered">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form id="registro-evento">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Evento</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="evento_nombre" class="form-control" value="<?=$evento[0]['evento_nombre']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Lugar</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="evento_lugar" class="form-control" value="<?=$evento[0]['evento_lugar']?>" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Link externo</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="evento_link" placeholder="http://cmot.com.mx/curso/1" class="form-control" value="<?=$evento[0]['evento_link']?>" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">El evento es solo un dia&nbsp;&nbsp;
                                            <div class="radio radio-success pull-right">
                                                <input id="fecha_termino_radio_si" type="radio" name="fecha_termino_radio" value="Si" checked="checked">
                                                <label for="fecha_termino_radio_si">Si</label>
                                                <input id="fecha_termino_radio_no" type="radio" name="fecha_termino_radio" value="No" >
                                                <label for="fecha_termino_radio_no">No</label>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-group" style="margin-top: -20px">
                                        <div class="row">
                                            <div class="col-md-12 fecha-inicio" >
                                                <label class="form-label">Fecha Inicio</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="evento_fecha" class="form-control fecha-calendar" value="<?=$evento[0]['evento_fecha']?>"  style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="col-md-6 hide fecha-termino">
                                                <label class="form-label">Fecha Termino</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="evento_fecha_termino" class="form-control fecha-calendar" value="<?=$evento[0]['evento_fecha_termino']?>"  style="margin-top: -10px">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Horarios de evento&nbsp;&nbsp;
                                            <div class="radio radio-success pull-right">
                                                <input id="horario_eventos_si" type="radio" name="evento_hora" value="Si" >
                                                <label for="horario_eventos_si">Si</label>
                                                <input id="horario_eventos_no" type="radio" name="evento_hora" value="No" checked>
                                                <label for="horario_eventos_no">No</label>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-group form-horarios hide" style="margin-top: -20px">
                                        <div class="row">
                                            <div class="col-md-6 " >
                                                <label class="form-label">Hora de Inicio</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="evento_hora_inicio" class="form-control tag-hora" value="<?=$evento[0]['evento_hora_inicio']?>"  style="margin-top: -10px">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Hora de Termino</label>
                                                <span class="help"></span>
                                                <div class="controls">
                                                    <input type="text" name="evento_hora_termino" class="form-control tag-hora" value="<?=$evento[0]['evento_hora_termino']?>"  style="margin-top: -10px">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group" style="margin-top: -10px">
                                        <div id="retrievingfilename" class="html5imageupload" data-width="580" data-height="350" data-url="<?=  base_url()?>config/upload_image?tipo=assets/img/eventos" style="width: 100%;">
                                            <input type="file" name="thumb" style="height: 200px!important">
                                        </div>
                                        <input type="hidden"  name="evento_img" id="filename" value="<?=$evento[0]['evento_img']?>" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Descripción</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <textarea name="evento_descripcion" class="form-control" rows="4"><?=$evento[0]['evento_descripcion']?></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                            <input type="hidden" name="evento_id" value="<?=$_GET['e']?>">
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
<script src="<?=  base_url()?>assets_dash/js/eventos.js" ></script>
