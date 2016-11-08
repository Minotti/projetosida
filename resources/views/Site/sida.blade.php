@extends('Site.templates.site')

@section('conteudo')
    <div class="bg-vermelho pad-b-20">
        <section class="container branco">
            <h1 class="titulo text-center">Sida</h1>

            <div class="row">
                <div class="col-md-3">
                    <video width="250" autoplay src="assets/Conteudos/apresentacao/meu_sinal.mp4"></video>
                    Eu sou a Cida pequena. Eu ensino os pequeninos.
                </div>

                <div class="col-md-3">
                    <video width="250" autoplay src="assets/Conteudos/apresentacao/meu_sinal.mp4"></video>
                    Eu sou a Cida jovem. Eu ensino os jovenzinhos.
                </div>

                <div class="col-md-3">
                    <video width="250" autoplay src="assets/Conteudos/apresentacao/meu_sinal.mp4"></video>
                    Eu sou a Cida adolescente. Eu ensino os adolescentes.
                </div>

                <div class="col-md-3">
                    <video width="250" autoplay src="assets/Conteudos/apresentacao/meu_sinal.mp4"></video>
                    Eu sou a Cida adulta. Eu ensino os adultos.
                </div>
            </div>
        </section>
    </div>
@endsection

@section('class-footer')
    bg-azul
@endsection