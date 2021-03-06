<div id="wrapper">
    <div id="page-wrapper" class="contenedor_principal gray-bg">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h2>Administracion de Clientes</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=base_url();?>">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Clientes</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Administrar</strong>
                    </li>
                </ol>

                <a href="<?=base_url(route_to('agregar_cliente'));?>" class="btn btn-primary btn_agregar_admin"><i class="fa fa-plus"></i> Agregar Cliente</a>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <form action="" id="form_add">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Administracion de Clientes</h5>
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
                                                    <th style="width: 60%;">Nombre</th>
                                                    <th style="width: 20%;">Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                foreach ($clientes as $arrCliente) {
                                                    # code...
                                                    ?>
                                                        <tr>
                                                            <td><?=$arrCliente->id;?></td>
                                                            <td><?=$arrCliente->nombre;?></td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Menu
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="<?=base_url(route_to('ver_cliente', $arrCliente->id));?>">Editar</a>
                                                                        <a class="dropdown-item eliminar_elemento" id_detalle="<?=$arrCliente->id;?>">Eliminar</a>
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