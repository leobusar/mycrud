@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    @if(Session::has('info'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ Session::get('info') }}
                        </div>
                    @endif
                    <div class="panel-heading">Listado de clientes
                	<a href="{{route('clientes.create')}}" class="btn btn-primary pull-right"> Nuevo</a></div>

                <div class="panel-body">
                	<table class="table table-hover">
                		<thead>
                			<tr>
                				<th>ID</th>
                				<th>Nombre</th>
                				<th>Fecha Nacimiento</th>
                				<th>Tel&eacute;fono</th>
                				<th colspan="3"></th>
                			</tr>
                		</thead>
                		<tbody>
		                	@foreach ($clientes as $cliente)
		                	<tr>
		                		<td>{{$cliente->id}}</td>
		                		<td>{{$cliente->nombre}}</td>
		                		<td>{{$cliente->fecha}}</td>
		                		<td>{{$cliente->telefono}}</td>
		                		<td><a href="{{route('clientes.show',$cliente->id)}}" class="btn btn-primary pull-right"> Ver</a></td>
		                		<td><a href="{{route('clientes.edit',$cliente->id)}}" class="btn btn-primary pull-right"> Editar</a></td>
		                		<td> 
		                			{!! Form::model($cliente, ['route' => ['clientes.destroy', $cliente->id], 'method' => 'DELETE']) !!}
		                			{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!} 
		                			{!! Form::close() !!}		                			
		                		</td>
		                	</tr>
		                	@endforeach       			
                		</tbody>

                	</table>
                	{!!$clientes->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection                	