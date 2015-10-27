@extends('principal')
@section('contenido')

<title>Roles</title>
<h3>Administraci&oacute;n Roles</h3>

{!! Form::open(array('url' => 'admin/createRole/')) !!}
<div class="form-group">
    {!!    Form::label('name', 'Nombre') !!}
    {!!    Form::text('name','', array('class' => 'form-control col-3')) !!}        
</div>
{!!    Form::submit('Guardar role', array('class' => 'btn btn-default')) !!}
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
