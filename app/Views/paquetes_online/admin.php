<div id="wrapper">
    <div id="page-wrapper" class="contenedor_principal gray-bg">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h2>Administrar Paquetes Online</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=base_url();?>">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Paquetes</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Administrar</strong>
                    </li>
                </ol>

                <!--<a href="<?php //echo base_url(route_to('agregar_cliente'));?>" class="btn btn-primary btn_agregar_admin"><i class="fa fa-plus"></i> Agregar Cliente</a>-->
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <form action="" id="form_add">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Agregar Cliente</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table" id="tabla">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th style="width: 60%;">Seguimiento</th>
                                                    <th style="width: 10%;">Cantidad</th>
                                                    <th style="width: 10%;">Precio</th>
                                                    <th style="width: 10%;">Fecha Ent.</th>
                                                    <th style="width: 10%;">Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                foreach ($detalle as $arrPaquete) {
                                                    # code...
                                                    ?>
                                                        <tr>
                                                            <td><?=$arrPaquete->id;?></td>
                                                            <td><?=$arrPaquete->numero_seguimiento;?></td>
                                                            <td><?=$arrPaquete->cantidad;?></td>
                                                            <td><?=$arrPaquete->precio_pedido;?></td>
                                                            <td><?=$arrPaquete->fecha_entrega;?></td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Menu
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="<?=base_url(route_to('ver_orden_paquetes_online', $arrPaquete->id));?>"><i class='fa fa-eye'></i> Ver Orden</a>
                                                                        <a class="dropdown-item seguimiento_modal" data-toggle='modal' data-target='#productMo' data-refresh='true'  role='button' id_detalle="<?=$arrPaquete->id;?>"><i class='fa fa-plus'></i> Agregar Seguimiento</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
    </div>
</div>

<div class="modal  fade" id="productMo" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-lg">
		</div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>