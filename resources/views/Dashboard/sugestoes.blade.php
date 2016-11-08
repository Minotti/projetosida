@extends('Dashboard.templates.dashboard')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <p class="panel-title">Enviar sugestão</p>
        </div>

        <div class="panel-body">
            {!! Form::open(['url' => '']) !!}
            <div class="form-group">
                <label class="control-label">Título</label>
                <input type="text" name="Sugestao_Titulo" class="form-control">
            </div>

            <div class="form-group">
                <label class="control-label">Sugestão</label>
                <input type="text" name="Sugestao_Descricao" class="form-control">
            </div>

            {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection