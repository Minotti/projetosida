@extends('Site.templates.site')

@section('conteudo')
    <div class="bg-marrom pad-b-20">
        <section class="container branco">
            <h1 class="titulo text-center">Contato</h1>

            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['url' => '']) !!}
                <div class="form-group">
                    <label class="control-label">Nome</label>
                    {!! Form::input('text', 'Contato_Nome', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="control-label">E-mail</label>
                    {!! Form::input('text', 'Contato_Email', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="control-label">Descrição</label>
                    {!! Form::textarea('Contato_Descricao', null, ['class'=>'form-control max-w-100']) !!}
                </div>

                {!! Form::submit('Enviar', ['class'=>'btn btn-laranja']) !!}
                {!! Form::close() !!}
            </div>
        </section>
    </div>
@endsection

@section('class-footer')
    bg-azul
@endsection