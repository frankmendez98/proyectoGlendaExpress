<div class="container">
    <div class="row">
        <?php
            foreach ($paquetes_online as $arrPaquete) {
                # code...
                ?>
                    <div class="col-lg-6">
                        <article class="card">
                            <header class="card-header"> Mis Ordenes / Seguimiento </header>
                            <div class="card-body">
                                <h6>Numero de Orden: <?=$arrPaquete->id;?></h6>
                                <article class="card">
                                    <div class="card-body row">
                                        <div class="col"> <strong>Fecha estimada de entrega:</strong> <br><?=$arrPaquete->fecha_entrega;?> </div>
                                        <div class="col"> <strong>Enviado Por:</strong> <br> <?=$arrPaquete->usuario->usuario;?>, | <i class="fa fa-phone"></i> <?=$arrPaquete->usuario->telefono;?> </div>
                                    </div>
                                    <div class="card-body row">
                                        <div class="col"> <strong>Status:</strong> <br> Picked by the courier </div>
                                        <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                                    </div>
                                </article>
                                <div class="track">
                                    <?php
                                        foreach ($arrPaquete->seguimiento_estados as $arrEstado) {
                                            # code...
                                            ?>
                                                <div class="step <?=($arrEstado->estado_activo==1)?'active':'';?>"> <span class="icon"> <i class="<?=$arrEstado->icono;?>"></i> </span> <span class="text"><?=$arrEstado->nombre;?></span> </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php
            }
        ?>
    </div>
</div>