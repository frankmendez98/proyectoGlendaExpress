<!-- Mainly scripts -->
<script src="<?=base_url('public/assets/js/jquery-3.1.1.min.js');?>"></script>
<script src="<?=base_url('public/assets/js/datatables.min.js');?>"></script>

<script src="<?=base_url('public/assets/js/popper.min.js');?>"></script>
<script src="<?=base_url('public/assets/js/bootstrap.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>

<!-- Flot -->
<script src="<?=base_url('public/assets/js/plugins/flot/jquery.flot.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins/flot/jquery.flot.tooltip.min.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins/flot/jquery.flot.spline.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins/flot/jquery.flot.resize.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins/flot/jquery.flot.pie.js');?>"></script>

<!-- Peity -->
<script src="<?=base_url('public/assets/js/plugins/peity/jquery.peity.min.js');?>"></script>
<script src="<?=base_url('public/assets/js/demo/peity-demo.js');?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?=base_url('public/assets/js/inspinia.js');?>"></script>
<script src="<?=base_url('public/assets/js/plugins/pace/pace.min.js');?>"></script>

<!-- jQuery UI -->
<script src="<?=base_url('public/assets/js/plugins/jquery-ui/jquery-ui.min.js');?>"></script>

<!-- GITTER -->
<script src="<?=base_url('public/assets/js/plugins/gritter/jquery.gritter.min.js');?>"></script>

<!-- Sparkline -->
<script src="<?=base_url('public/assets/js/plugins/sparkline/jquery.sparkline.min.js');?>"></script>

<!-- Sparkline demo data  -->
<script src="<?=base_url('public/assets/js/demo/sparkline-demo.js');?>"></script>

<!-- ChartJS-->
<script src="<?=base_url('public/assets/js/plugins/chartJs/Chart.min.js');?>"></script>

<!-- Toastr -->
<script src="<?=base_url('public/assets/js/plugins/toastr/toastr.min.js');?>"></script>


<script src="<?=base_url("public/assets/libs/parsley/parsley.min.js")?>"></script>
<script src="<?=base_url("public/assets/libs/parsley/parsley.es.js")?>"></script>
<script src="<?=base_url("public/assets/libs/izitoast/iziToast.min.js")?>"></script>
<script src="<?=base_url("public/assets/libs/cropper/cropper.min.js")?>"></script>

<!-- Data Tables -->
<!--<script src="<?= base_url(); ?>public/assets/libs/dataTables/datatables.js"></script>-->

<script src="<?=base_url("public/assets/libs/select2/select2.min.js")?>"></script>

<script src="<?= base_url("public/assets/libs/numeric/jquery.numeric.js"); ?>"></script>
<script src="<?=base_url('public/assets/js/utils.js');?>"></script>

<script src="<?=base_url("public/assets/libs/sweetalert2/sweetalert2.min.js")?>"></script>

<script src="<?= base_url("public/assets/libs/dropify/dropify.min.js"); ?>"></script>
<script src="<?= base_url("public/assets/libs/datapicker/bootstrap-datepicker.min.js"); ?>"></script>
<script src="<?= base_url("public/assets/libs/datapicker/boostrap-datepicker.es.min.js"); ?>"></script>

        

<link href="<?=base_url('public/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('public/assets/css/datatables.min.css'); ?>" rel="stylesheet">

    <link href="<?=base_url('public/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?=base_url('public/assets/css/plugins/toastr/toastr.min.css');?>" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?=base_url('public/assets/js/plugins/gritter/jquery.gritter.css');?>" rel="stylesheet">

    <link href="<?=base_url('public/assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/css/style.css');?>" rel="stylesheet">
	<link href="<?= base_url('public/assets/libs/izitoast/iziToast.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('public/assets/libs/cropper/cropper.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('public/assets/libs/dataTables/dataTables.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('public/assets/libs/select2/select2.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('public/assets/libs/sweetalert2/sweetalert2.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url("public/assets/libs/dropify/dropify.min.css"); ?>" rel="stylesheet">
    <link href="<?= base_url("public/assets/libs/datapicker/boostrap-datepicker.min.css"); ?>" rel="stylesheet">

<div id="wrapper">
    <div id="page-wrapper" class="contenedor_principal gray-bg container">
        <div class="wrapper wrapper-content animated fadeInRight">
            <form action="" id="form_add">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Inicar Sesion</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Nombre de Usuario</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese nombre de usuario" name="usuario">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input required type="text" class="form-control" placeholder="Ingrese password" name="password">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-actions col-lg-12">
                                <button type="submit" id="btn_add" name="btn_add" class="btn btn-success m-t-n-xs float-right"><i class="fa fa-save"></i>
                                    Iniciar Sesion
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>
<script>var base_url = '<?php echo base_url() ?>'</script>

<script src="<?=base_url("public/assets/js/scripts/login.js");?>"></script>