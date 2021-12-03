<div id="wrapper">
    <div id="page-wrapper" class="contenedor_principal gray-bg">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h2>Agregar Paquete Normal</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=base_url();?>">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Paquetes</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Agregar</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <form action="" id="form_add">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Agregar Paquete Normal</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Cliente</label>
                                            <select name="cliente" class="form-control select2" id="cliente">
                                            <?php
                                                foreach ($clientes as $arrCliente) {
                                                    # code...
                                                    ?>
                                                        <option value=""><?=$arrCliente->nombre;?></option>
                                                    <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Direccion Envio</label>
                                            <input required type="text" name="direccion_envio" class="form-control" placeholder="Ingrese direccion de envio">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Direccion Entrega</label>
                                            <input required type="text" name="direccion_entrega" class="form-control" placeholder="Ingrese direccion de entrega">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Producto</label>
                                        <select name="" class="form-control select2" id="productoSelect">
                                            <?php
                                                foreach ($paquetes as $arrProducto) {
                                                    # code...
                                                    ?>
                                                        <option value="<?=$arrProducto->id;?>"><?=$arrProducto->nombre;?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Accion</label><br>
                                            <a class="btn btn-primary agregar_paquete">Agregar Paquete</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Peso</th>
                                        <th>Peso($)</th>
                                        <th style="width: 15%;">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody_tr">
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Total:</td>
                                        <td></td>
                                        <td></td>
                                        <td><input readonly type="text" class="total form-control" name="total"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            <div class="form-actions col-lg-12">
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
