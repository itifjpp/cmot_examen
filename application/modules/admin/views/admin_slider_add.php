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
            <li><a href="#" >Configuración</a> </li>
            <li><a href="<?=  base_url()?>admin/slider" >Slider</a> </li>
            <li><a href="#" class="active">Agregar slider</a> </li>
        </ul>
        <div class="row">
            <br><br>
            <div class="col-md-12 ">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form id="add-slider">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Titulo principal</label>
                                        <div class="controls">
                                            <textarea class="form-control" required="" rows="4" name="slider_titulo_prin"><?=$slider[0]['slider_titulo_prin']?></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px" hidden="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Align data-x</label>
                                                <div class="controls">
                                                    <select class="select2 " id="slider_titulo_prin_align" name="slider_titulo_prin_align_x" style="width: 100%" data-value="<?=$slider[0]['slider_titulo_prin_align_x']?>">
                                                        <option value="left">Left</option>
                                                        <option value="right">Right</option>
                                                        <option value="center">center</option>
                                                    </select>
                                                </div> 
                                            </div>
                                            <div class="col-md-6">
                                               <label class="form-label">Align data-y</label>
                                                <div class="controls">
                                                    <input type="text" name="slider_titulo_prin_align_y" placeholder="Ejemplo: 300" value="<?=$slider[0]['slider_titulo_prin_align_y']?>" class="form-control " style="margin-top: 0px">
                                                </div>       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Titulo principal font-size</label>
                                        <div class="controls">
                                            <input type="text" name="slider_titulo_prin_font" value="<?=$slider[0]['slider_titulo_prin_font']?>" placeholder="Ejemplo 20" class="form-control " style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Titulo secundario&nbsp;&nbsp;&nbsp;
                                            <div class="radio radio-success pull-right">
                                                <input id="slider_titulo_sec_radio_si" type="radio" name="slider_titulo_sec_radio" value="Si" checked="checked">
                                                <label for="slider_titulo_sec_radio_si">Si</label>
                                                <input id="slider_titulo_sec_radio_no" type="radio" name="slider_titulo_sec_radio" value="No" >
                                                <label for="slider_titulo_sec_radio_no">No</label>
                                            </div>
                                        </label>
                                        <div class="controls titulo-secundario">
                                            <textarea class="form-control slider_titulo_sec" rows="4" name="slider_titulo_sec"><?=$slider[0]['slider_titulo_sec']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group titulo-secundario" style="margin-top: -10px" hidden="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Align data-x</label>
                                                <div class="controls">
                                                    <select class="select2 " id="slider_titulo_sec_align_x" name="slider_titulo_sec_align_x" style="width: 100%" data-value="<?=$slider[0]['slider_titulo_sec_align_x']?>">
                                                        <option value="left">Left</option>
                                                        <option value="right">Right</option>
                                                        <option value="center">center</option>
                                                    </select>
                                                </div> 
                                            </div>
                                            <div class="col-md-6">
                                               <label class="form-label">Align data-y</label>
                                                <div class="controls">
                                                    <input type="text" name="slider_titulo_sec_align_y" placeholder="Ejemplo: 290" value="<?=$slider[0]['slider_titulo_sec_align_y']?>" class="form-control " style="margin-top: 0px">
                                                </div>       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group titulo-secundario" style="margin-top: -10px">
                                        <label class="form-label">Titulo secundario font-size</label>
                                        <div class="controls">
                                            <input type="text" name="slider_titulo_sec_font" value="<?=$slider[0]['slider_titulo_sec_font']?>" placeholder="Ejemplo 20" class="form-control " style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: 0px">
                                        <label class="form-label">Boton&nbsp;&nbsp;&nbsp;
                                            <div class="radio radio-success pull-right">
                                                <input id="slider_btn_text_si" type="radio" name="slider_btn_text_radio" value="Si" checked="checked">
                                                <label for="slider_btn_text_si">Si</label>
                                                <input id="slider_btn_text_no" type="radio" name="slider_btn_text_radio" value="No" >
                                                <label for="slider_btn_text_no">No</label>
                                            </div>
                                        </label>
                                        <div class="controls content-btn">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="slider_btn_text" placeholder="Ejemplo: Leer más" value="<?=$slider[0]['slider_btn_text']?>" class="form-control " style="margin-top: 0px">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="slider_btn_url" placeholder="N° de noticia ejemplo: 24323" value="<?=$slider[0]['slider_btn_url']?>" class="form-control " style="margin-top: 0px">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group content-btn" style="margin-top: -10px" hidden="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Align data-x</label>
                                                <div class="controls">
                                                    <select class="select2 " id="slider_btn_aling_x" name="slider_btn_aling_x" style="width: 100%" data-value="<?=$slider[0]['slider_btn_aling_x']?>">
                                                        <option value="left">Left</option>
                                                        <option value="right">Right</option>
                                                        <option value="center">center</option>
                                                    </select>
                                                </div> 
                                            </div>
                                            <div class="col-md-6">
                                               <label class="form-label">Align data-y</label>
                                                <div class="controls">
                                                    <input type="text" name="slider_btn_aling_y" placeholder="Ejemplo: 320" value="<?=$slider[0]['slider_btn_aling_y']?>" class="form-control " style="margin-top: 0px">
                                                </div>       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div id="retrievingfilename" class="html5imageupload" data-width="1200" data-height="860" data-url="<?=  base_url()?>config/upload_image?tipo=assets/img/slider" style="width: 100%;" data-resize="true">
                                        <input type="file" name="thumb" style="height: 200px!important;" >
                                    </div>
                                    <input type="hidden" name="filename" value="<?=$slider[0]['slider_img']?>" id="filename" />
                                    
                                    <div class="form-group" style="margin-top: 10px;">
                                        <input type="hidden" name="accion" value="<?=$_GET['a']?>">
                                        <input type="hidden" name="slider_id" value="<?=$_GET['s']?>">
                                        <input type="hidden" name="slider_fecha"  class="form-control input-fecha-actual" style="margin-top: -10px">
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
