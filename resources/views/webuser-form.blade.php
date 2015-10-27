@extends('principal')
@section('contenido')

<title>Crear Nuevo Usuario</title>
<h3>Administraci&oacute;n Usuario</h3>

{!! Form::open(array('url' => 'admin/createUser/')) !!}
<div class="form-group">
    {!!    Form::label('email', 'Email') !!}
    {!!    Form::email('email','', array('class' => 'form-control col-3')) !!}        
</div>
<div class="form-group">
    {!!    Form::label('role_id', 'Role') !!}
    {!!    Form::text('role_id','', array('class' => 'form-control col-3')) !!}        
</div>
<div class="form-group">
    {!!    Form::label('guid', 'Compania') !!}
    {!!    Form::text('guid','', array('class' => 'form-control col-3')) !!}        
</div>
<div class="form-group">
    {!!    Form::label('password', 'Clave') !!}
    {!!    Form::password('password',array('class' => 'form-control col-3')) !!}        
</div>
<div class="form-group">
    {!!    Form::label('timezone_name', 'Time Zone') !!}
    {!!    Form::text('timezone_name','', array('class' => 'form-control col-3')) !!}        
</div>

{!!    Form::submit('Crear Usuario', array('class' => 'btn btn-default')) !!}
@if ( $errors->count() > 0 )
<div class="alert alert-danger" style="margin-top: 10px;">
    <p>Se presentaron los siguientes errores:</p>
    <ul>
        @foreach( $errors->all() as $message )
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>    
@endif
{!! Form::close() !!}


@endsection('contenido')
