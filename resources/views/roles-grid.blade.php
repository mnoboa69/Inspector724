@extends('principal')
@section('contenido')

<title>Roles</title>
<h3>Administraci&oacute;n Roles</h3>

<div class="form-group">
    <table class="table table-striped table-bordered table-hover dataTables-example" >
        <thead>
            <th>Id</th>
            <th>Nombre</th>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr class="gradeX">
                <td>{{ $role->role_id }}</td>
                <td>{{ $role->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection('contenido')
