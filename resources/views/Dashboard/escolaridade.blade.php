@extends('Dashboard.templates.dashboard')

@section('content')
    <section>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {!!Form::label('Disciplinas', null, ['class'=>'control-label'])!!}
                    {!!Form::select('disciplinas', $disciplinas, null, ['class'=>'form-control', 'placeholder' => 'Selecione a disciplina'])!!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {!!Form::label('Conteúdo', null, ['class'=>'control-label'])!!}
                    {!!Form::select('conteudo', $conteudo, null, ['class'=>'form-control sel-conteudo', 'placeholder' => 'Selecione a Classe'])!!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <video src="" class="video-escolaridade" style="max-width: 100%;"></video>
            </div>
        </div>
    </section>
@endsection