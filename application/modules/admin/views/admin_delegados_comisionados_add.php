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
            <li><a href="<?=  base_url()?>admin/delegados_comisionados" >Delegados y Comisionados</a> </li>
            <li><a href="#" class="active">Nuevo</a> </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-body no-border"> <br>
                        <form class="registro-delegados">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Delegación</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="del_delegacion" value="<?=$del[0]['del_delegacion']?>" class="form-control" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Delegado</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <input type="text" name="del_nombre" value="<?=$del[0]['del_nombre']?>" class="form-control" required="" style="margin-top: -10px">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <label class="form-label">Estados</label>
                                        <span class="help"></span>
                                        <div class="controls">
                                            <select name="estado_id" id="estado_id" class="select2" data-id="<?=$del[0]['estado_id']?>" style="width: 100%"></select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: -10px">
                                        <input type="hidden" value="<?=$_GET['a']?>" name="accion">
                                        <input type="hidden" value="<?=$_GET['dc']?>" name="del_id">
                                        <input type="submit"class="btn btn-cons back-imss btn-add" value="Guardar">
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
<script src="<?=  base_url()?>assets_dash/js/delegados_comisionados.js" ></script>
