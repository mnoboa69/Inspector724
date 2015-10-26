@extends('principal')
@section('contenido')

<title>Jumbotron Template for Bootstrap</title>
<h3>Administraci&oacute;n Compan&iacute;a</h3>

{!! Form::open(array('url' => 'admin/createCompany/')) !!}
<div class="form-group">
    {!!    Form::label('name', 'Nombre') !!}
    {!!    Form::text('name','', array('class' => 'form-control col-3')) !!}        
</div>
<div class="form-group">    
    {!!    Form::hidden('plan_id','1', array('class' => 'form-control col-3')) !!}
</div>
<div class="form-group">
    {!!    Form::label('start_date', 'Fecha Inicio') !!}
    {!!    Form::date('start_date', \Carbon\Carbon::now()) !!}
</div>
<div class="form-group">
    {!!    Form::label('end_date', 'Fecha Fin') !!}
    {!!    Form::date('end_date', \Carbon\Carbon::now()) !!}
</div>
<div class="form-group">
    {!!    Form::label('last_name', 'Apellido') !!}
    {!!    Form::text('last_name','', array('class' => 'form-control col-3')) !!}
</div>
{!!    Form::submit('realizar post', array('class' => 'btn btn-default')) !!}
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
