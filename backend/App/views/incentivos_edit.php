<?php echo $header;?>
<div class="right_col">
  <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
    <div class="x_panel tile fixed_height_240">
      <div class="x_title">
        <br><br>
        <h1>Editar Incentivo </h1>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form class="form-horizontal" id="add" action="/Incentivos/incentivoEdit" method="POST">
          <div class="form-group ">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control col-md-7 col-xs-12" placeholder="Ingresa el nombre de la incidencia" name="nombre" id="nombre" value="<?php echo $incidencia['nombre'] ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripci&oacute;n <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripci&oacute;n de la incidencia"><?php echo $incidencia['descripcion'] ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estatus">Color:<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control" id="color" name="color" type="text" value="<?php echo $incidencia['color'] ?>" style="background-color:<?php echo $incidencia['color'] ?>"></span>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estatus">Fijo:<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="fijo" id="fijo" type="checkbox" data-on-text="SI" data-off-text="NO" <?php echo $checked ?>>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repetitivo">Repetitivo:<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="repetitivo" id="repetitivo" type="checkbox" data-on-text="SI" data-off-text="NO" <?php echo $repetido; ?>>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estatus">Tipo:<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control col-md-7 col-xs-12" name="tipo" id="tipo">
                  <option value="" disabled selected>Selecciona del tipo que será el incentivo</option>
                  <?php echo $tipo; ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estatus">Estatus:<span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control col-md-7 col-xs-12" name="status" id="status">
                  <option value="" disabled selected>Selecciona un estatus</option>
                  <?php echo $status; ?>
                </select>
              </div>
            </div>

            <input type="hidden" name="catalogo_incentivo_id" id="catalogo_incentivo_id" value="<?php echo $incidencia['catalogo_incentivo_id'];?>">

            <div class="form-group">
            <br>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-danger col-md-3 col-sm-3 col-xs-3 col-md-offset-3" type="button" id="btnCancel">Cancelar</button>
                <button class="btn btn-success col-md-3 col-sm-3 col-xs-3" type="submit" id="btnAdd">Actualizar</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php echo $footer;?>
