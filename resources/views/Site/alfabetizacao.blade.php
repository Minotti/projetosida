@extends('Site.templates.site')

@section('conteudo')
    <div class="bg-marrom pad-b-20">
        <section class="container branco">
            <h1 class="titulo text-center">Alfabetização</h1>

            <div class="row">
                <div class="col-md-3">
                    <div class="tipo col-md-10 form-group">
                        {!!Form::label('Tipo', null, ['class'=>'label-control'])!!}
                        {!!Form::select('tipo', $tipo, null, ['class'=>'form-control sel-tipo', 'placeholder' => 'Selecione o Tipo'])!!}
                    </div>

                    <div class="alfabeto col-md-10 form-group none">
                        {!!Form::label('alfabeto', null, ['class'=>'label-control'])!!}
                        {!!Form::select('alfabeto', $alfabeto, null, ['class'=>'form-control sel-alfabeto', 'placeholder' => 'Selecione a Letra'])!!}
                    </div>

                    <div class="numeros col-md-10 form-group none">
                        {!!Form::label('numeros', 'Números', ['class'=>'label-control'])!!}
                        {!!Form::select('numeros', $numeros, null, ['class'=>'form-control sel-numeros', 'placeholder' => 'Selecione o número'])!!}
                    </div>

                    <div class="objetos col-md-10 form-group none">
                        {!!Form::label('objetos', null, ['class'=>'label-control'])!!}
                        {!!Form::select('objetos', $objetos, null, ['class'=>'form-control sel-objetos', 'placeholder' => 'Selecione a opção'])!!}
                    </div>
                </div>

                <div class="col-md-8">
                    <video class="video" style="max-width: 100%;"></video>
                </div>
            </div>
        </section>
    </div>
@endsection