<div id="wrapper">
    <div id="page-wrapper" class="contenedor_principal gray-bg">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h2>Ver Orden Online</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=base_url();?>">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Paquetes</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Ver Orden</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <form action="" id="form_add">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Datos Orden Online</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Cliente</label>
                                            <input required type="text" name="direccion" class="form-control" value="<?=$encabezado->usuario->usuario;?>" placeholder="Ingrese direccion">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Numero Seguimiento</label>
                                            <input required type="text" name="nombre" class="form-control" value="<?=$encabezado->numero_seguimiento;?>" placeholder="Ingrese nombre">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Fecha Entrega</label>
                                            <input required type="text" name="nombre" class="form-control" value="<?=$encabezado->fecha_entrega;?>" placeholder="Ingrese nombre">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Descripcion</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?=$encabezado->descripcion;?></td>
                                                <td><?=$encabezado->cantidad;?></td>
                                                <td><?=$encabezado->precio_pedido;?></td>
                                                <td><?=$encabezado->precio_pedido;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="form-actions col-lg-12">
                                <button type="submit" id="btn_add" name="btn_add" class="btn btn-success m-t-n-xs float-right"><i class="fa fa-upload"></i>
                                    Actualizar Registro
                                </button>
                            </div>
                        </div>
                        -->
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>
