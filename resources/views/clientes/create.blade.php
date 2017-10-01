@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Cliente                	
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'clientes.store']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono') !!}
                            {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                        </div>                    
                        <div class="form-group">
                            {!! Form::label('fecha', 'Fecha de Nacimiento') !!}
                            {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('documento', 'Documento') !!}
                            {!! Form::number('documento', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!!Form::close()!!}                        
                </div>
            </div>
        </div>
    </div>
 @endsection