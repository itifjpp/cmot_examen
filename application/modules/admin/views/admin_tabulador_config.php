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
            <li><a href="#" class="">Medicos</a> </li>
            <li><a href="<?=  base_url()?>admin/tabulador" class="">Tabulador</a> </li>
            <li><a href="#" class="active">Actividades y Puntos</a> </li>
        </ul>
        <div class="row-fluid">
            <div class="col-md-8 col-md-offset-2">
                <div class="span12">
                    <div class="grid simple ">
                        <div class="grid-title">
                            <h4><?=$tabulador[0]['tabulador_nombre']?></h4>
                            <a href="" class="hidden">
                                <button class="btn btn-cons pull-right back-imss">Agregar</button>
                            </a>
                        </div>
                        <div class="grid-body ">
                            <table class="table table-hover table-condensed" id="example">
                                <thead>
                                    <tr>

                                        <th style="width:60%">Nombre</th>
                                        <th style="width:auto">Puntos</th>
                                        <th style="width: auto;" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($puntos as $g):?>
                                    <tr id="<?=$g['tabulador_puntos_id']?>">
                                        <td class="v-align-middle"><?=$g['tabulador_puntos_nombre']?> </td>
                                        <td class="v-align-middle"><?=$g['tabulador_puntos_punto']?> Puntos</td>
                                        <td class="text-center">
                                            <i class="fa fa-pencil icono-acciones tip editar-puntos pointer" data-id="<?=$g['tabulador_puntos_id']?>" data-puntos="<?=$g['tabulador_puntos_punto']?>"></i>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>

        </div>
    </div>
</div>
<?=  Modules::run('config/get_footer_admin')?>
<script src="<?=  base_url()?>assets_dash/js/medicos.js" ></script>
<script>
$(document).ready(function(e){
    $('body .DTTT,#example_length,.dataTables_filter').hide();
})
</script>
