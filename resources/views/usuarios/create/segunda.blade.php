<!--=================================================
=            Cuadro de Formulario            =
==================================================-->
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Registro de usuarios</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      {!! Form::open(['route'=>'usuarios.store', 'method'=>'POST']) !!}
        <div class="box-body">
        <div class="row">
        <!--===================================================
        =            Lado Izquierdo del formulario            =
        ====================================================-->
        
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <!-- Nomnre de Usuario -->
              
              <div class="form-group">
                {!! Form::label('name', 'Nombre', []) !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su nombre']) !!}
              </div>
              <!-- Apellido Usuario -->
              
              <div class="form-group">
                {!! Form::label('apellido', 'Apellido', []) !!}
                {!! Form::text('apellido', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su apellido']) !!}
              </div>
              <!-- Cedula Usuario -->
              
              <div class="form-group">
                {!! Form::label('cedula', 'Cedula', []) !!}
                {!! Form::text('cedula', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su cedula']) !!}
              </div>
              <!-- Direccion de Usuario -->
              
              <div class="form-group">
                {!! Form::label('direccion', 'Direccion', []) !!}
                {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su direccion']) !!}
              </div>
            </div>
            <!--=================================================
            =            Lado derecho del formulario            =
            ==================================================-->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <!-- Nivel de Usuario -->
              
              <div class="form-group">
                {!! Form::label('tipo', 'Nivel', []) !!}
                {!! Form::select('tipo', (['uno' =>'UNO']), null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Nivel']) !!}
              </div>
              <!-- Clave de Usuario -->
              
              <div class="form-group">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  {!! Form::label('password', 'Clave', []) !!}
                  {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingrese su clave']) !!}
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  {!! Form::label('password_confirm', 'Confirme la clave', []) !!}
                  {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingrese su clave']) !!}
                </div>
                </div>
                </div>
                <!-- Correo Electronico de Usuario -->
                
                <div class="form-group">
                {!! Form::label('email', 'Correo Electronico', []) !!}
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope-o"></i>
                  </div>
                {!! Form::text('email', null, ['class'=>'form-control pull-right', 'placeholder'=>'Ingrese su E-mail']) !!}
                </div>
              </div>
              <!-- Fecha de nacimiento de Usuario -->
              
              <div class="form-group">
                {!! Form::label('datepicker', 'Fecha de nacimiento', []) !!}
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                {!! Form::text('datepicker', null, ['class'=>'form-control pull-right', 'placeholder'=>'Ingrese su Fecha de Nacimiento']) !!}
                </div>
              </div>

              
            </div>
        </div>
        
        </div>
        <!-- Parte baja de formulario donde estan los botones -->
        
        <div class="box-footer">
          {!! Form::submit('Registrar', ['class'=>'btn btn-xs btn-primary']) !!}
          {!! Form::reset('Limpiar', ['class'=>'btn btn-xs btn-warning']) !!}
        </div>
          <!--=====================================
          =            Fin de Formulario            =
          ======================================-->
        {!! Form::close() !!}
    </div>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
</div>
<!--====  End of Cuadro de Formulario  ====-->
