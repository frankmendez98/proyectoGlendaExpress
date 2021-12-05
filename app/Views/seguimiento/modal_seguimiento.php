<?php
$dat = uniqid();
?>

<div class="modal-header">
  <div class="col-lg-1">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  </div>
  <div class="col-lg-11">
    <h5 class="modal-title">Seguimiento de Paquete</h5>
    <small class="font-bold"></small>
  </div>
</div>
<div class="modal-body">
  <div class="row">  
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Estado</label>
            <select name="estado" class="form-control" id="estado">
                <?php
                    foreach ($estados as $arrEstado) {
                        # code...
                        ?>
                            <option value="<?=$arrEstado->id;?>"><?=$arrEstado->nombre;?></option>
                        <?php
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Observacion</label>
            <input type="text" class="form-control" name="observacion" id="observacion">
        </div>
    </div>
  </div>
</div>
<div class="modal-footer">
    <input type="hidden" name="id_orden" id="id_orden" value="<?=$id;?>">
    <button type="button" class="btn btn-primary" id="agregarSeguimientoModal" data-dismiss="modal">Agregar</button>
    <button type="button" class="btn btn-white closingdata" data-dismiss="modal">Cerrar</button>
</div>

<script>
  $(document).ready(function(){
    $(".select2").select2({
    dropdownParent: $("#productMo");
    });
  })
</script>