<div id="wrapper">
    <div id="page-wrapper" class="contenedor_principal gray-bg">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h2>Editar Cliente</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=base_url();?>">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Clientes</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Editar</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <form action="" id="form_edit">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Editar Cliente</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Nombre</label>
                                            <input required type="text" name="nombre" value="<?=$encabezado->nombre;?>" class="form-control" placeholder="Ingrese nombre">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Direccion</label>
                                            <input required type="text" name="direccion" value="<?=$encabezado->direccion;?>" class="form-control" placeholder="Ingrese direccion">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Telefono</label>
                                            <input required type="text" name="telefono" value="<?=$encabezado->telefono;?>" class="form-control" placeholder="0000-0000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-actions col-lg-12">
                                <input type="hidden" name="id" value="<?=$encabezado->id;?>">
                                <button type="submit" id="btn_add" name="btn_add" class="btn btn-success m-t-n-xs float-right"><i class="mdi mdi-content-save"></i>
                                    Guardar Registro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>
