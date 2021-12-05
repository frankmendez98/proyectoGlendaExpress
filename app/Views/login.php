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
                                    <input type="text" class="form-control" placeholder="Ingrese nombre de usuario" name="usuario">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-actions col-lg-12">
                                <button type="submit" id="btn_add" name="btn_add" class="btn btn-success m-t-n-xs float-right"><i class="fa fa-upload"></i>
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
