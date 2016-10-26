@extends('Dashboard.templates.dashboard')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <p class="panel-title">Selecione as Opções</p>
        </div>

        <div class="panel-body">
            {!! Form::open(['url' => route('sala')]) !!}

            <div class="form-group">
                <label class="control-label">Escola</label>
                {!! Form::select('escola', $escolas, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <label class="control-label">Série</label>
                {!! Form::select('serie', $series, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <label class="control-label">Disciplina</label>
                {!! Form::select('disciplina', $disciplinas, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                <label class="control-label">Conteúdo</label>
                {!! Form::select('conteudo', $conteudos, null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Entrar em sala', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection