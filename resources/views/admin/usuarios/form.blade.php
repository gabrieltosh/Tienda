 @include('tienda.parcial.errors') 
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                   {!!Form::text('nombre', null,['class' => 'form-control round-form'])!!}
                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
              </div>
          </div>
           <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Apellido</label>
              <div class="col-sm-10">
                   {!!Form::text('apellido', null,['class' => 'form-control round-form'])!!}
                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Correo</label>
              <div class="col-sm-10">
                   {!!Form::email('email', null,['class' => 'form-control round-form'])!!}
                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Usuario</label>
              <div class="col-sm-10">
                   {!!Form::text('usuario', null,['class' => 'form-control round-form'])!!}
                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Contraseña</label>
              <div class="col-sm-10">
                   {!!Form::password('password',['class' => 'form-control round-form'])!!}
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Confirmar Contraseña</label>
              <div class="col-sm-10">
                   {!!Form::password('password_confirmation',['class' => 'form-control round-form'])!!}
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label" >Direccion</label>
              <div class="col-sm-10">
                   {!!Form::text('direccion', null,['class' => 'form-control round-form'])!!}
                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
              </div>
          </div>
           <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Subir Imagen</label>
        <div class="col-sm-10">
            {!!Form::file('imagen',null,['class' => 'form-control round-form'])!!}
             <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
        </div>
    </div>