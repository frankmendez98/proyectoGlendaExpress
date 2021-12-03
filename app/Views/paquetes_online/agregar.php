<div class="contenedor_plantilla_tienda">
    <div class="container">
        <form action="" id="form_add">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Numero de Seguimiento</label>
                        <input required type="text" class="form-control" name="numero_seguimiento" placeholder="Ingrese numero de seguimiento">
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="">Fecha Entrega</label>
                    <input type="text" class="form-control" name="fecha_entrega" placeholder="yyyy-mm-dd">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Descripcion de Pedido</label>
                        <input required type="text" class="form-control" name="descripcion" placeholder="Ingrese descripcion">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="">Cantidad</label>
                        <input required type="text" class="form-control" name="cantidad" placeholder="Ingrese cantidad">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="">Precio de Pedido</label>
                        <input required type="text" class="form-control" name="precio_pedido" placeholder="Ingrese precio">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <label for="foto">Foto del producto</label>
                        <input type="file" id="img3" name="img3" class="dropify" accept="image/*"/>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-actions col-lg-12">
                    <button type="submit" id="btn_add" name="btn_add" class="btn btn-success m-t-n-xs float-right"><i class="fa fa-save"></i>
                        Guardar Registro
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>