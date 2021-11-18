
<style media="screen">
::ng-deep.swal2-container {
  z-index: 1000000;
}
.swal-overlay
{
    z-index: 100000000000 !important;
}
.swal2-container {
  z-index: 100000000000 !important;
}
</style>
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row" >
        <div class="col-lg-12">
            <div class="ibox">


				<?php if (isset($buttons)): ?>
					<div class="ibox-title">
						<?php foreach ($buttons as $btn):?>
							<?php if($btn["modal"]==true): ?>
								<a
									<?php if(isset($btn["url"])): ?>
										href = '<?=base_url($btn["url"])?>'
									<?php else: ?>
										href = '#'
									<?php endif; ?>
									id="modal_btn_add" role="button" class="btn btn-success" data-toggle="modal" data-target="#viewModal" data-refresh='true'>
									<i class="<?=$btn["icon"]?>"></i><?=$btn["txt"]?>
								</a>
							<?php else: ?>
								<a href="<?=base_url($btn["url"])?>" class="btn btn-success">
									<i class="<?=$btn["icon"]?>"></i><?=$btn["txt"]?>
								</a>
							<?php endif; ?>
						<?php endforeach;?>
					</div>
				<?php endif; ?>

        <?php
          if (isset($boton)) {
            // code...
            ?>
            <div class="ibox-title">
            <a id="<?=$boton['id']?>" style="color:#fff;" class="btn btn-success">
              <i class="<?=$boton["icon"]?>"></i><?=$boton["txt"]?>
            </a>
          </div>
            <?php
          }
          else{

          }
         ?>
                <?php if (isset($selects)): ?>
        					<div class="ibox-title">
        						<?php foreach ($selects as $kd):?>
                      <select class="select2" name="<?=$kd['name'] ?>" id="<?=$kd['name'] ?>">
                        <?php foreach ($kd['data'] as $key):
                          $array = (array) $key;
                          $tex = "";
                          $d = 0;
                          $ar = array();
                          foreach ($kd['text'] as $key => $value) {
                            $ar[$d] = $array[$value];
                            $d++;
                          }
                          $tex = implode($kd['separator'], $ar)
                          ?>
                          <option <?php if($kd['selected']==$array[$kd['id']]){echo "selected";} ?> value="<?=$array[$kd['id']] ?>"> <?=$tex?></option>
                        <?php endforeach; ?>
                      </select>
        						<?php endforeach;?>
        					</div>
        				<?php endif; ?>


                <div class="ibox-content">
                    <!--load datables estructure html-->
                    <header>
                        <h3 class="text-success"><i class="<?=$icono;?>"></i> <?=$titulo?></h3>
                    </header>
                    <section>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover datatable" id="editable">
                                <thead class="">
                                    <tr>
                                        <?php foreach ($table as $key => $value): ?>
                                            <th style="width: <?=$value?>%" class='text-primary font-bold'><?= $key?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!--div class='ibox-content'-->
                    </section>
                    <!--Show Modal Popups View & Delete -->
                </div>
                <!--div class='ibox-content'-->
            </div>
            <!--<div class='ibox float-e-margins' -->
        </div>
        <!--div class='col-lg-12'-->
    </div>
    <!--div class='row'-->
</div>

<input type="hidden" name="" value="" id="csrf_token_id">
<?php if(isset($proceso)){ ?>
<input type="hidden" value="<?php echo $proceso; ?>" id="proceso">
<?php } ?>


<div class='modal  fade' id='viewModal' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-md'>
        <div class='modal-content modal-md'>
		</div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
