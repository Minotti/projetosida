@extends('Dashboard.templates.dashboard')

@section('content')
    {{--Aqui será exibido o conteúdo do dia da disciplina selecionada--}}
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <p class="panel-title">Sala do Aluno</p>
                </div>

                <div class="panel-body">
                    <video src="../assets/Conteudos/apresentacao/meu_sinal.mp4" style="max-width: 100%;" controls></video>
                </div>
            </div>
        </div>

        {{--Aqui será exibido o conteúdo do dia da disciplina selecionada--}}
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <p class="panel-title">Conteúdo aplicado hoje</p>
                </div>

                <div class="panel-body">
                    <a href="#" style="display: block; margin-bottom: 5px;">
                        <div style="padding: 5px; border: 1px solid #337AB7; box-shadow: 0 0 0.5px; border-radius: 2px; /*border-bottom: 2px solid; color: #337AB7;*/">
                            <span>Descrição do video  que foi executado pelo professor neste dia.</span>
                        </div>
                    </a><a href="#" style="display: block; margin-bottom: 5px;">
                        <div style="padding: 5px; border: 1px solid #337AB7; box-shadow: 0 0 0.5px; border-radius: 2px; /*border-bottom: 2px solid; color: #337AB7;*/">
                            <span>Descrição do video  que foi executado pelo professor neste dia.</span>
                        </div>
                    </a><a href="#" style="display: block; margin-bottom: 5px;">
                        <div style="padding: 5px; border: 1px solid #337AB7; box-shadow: 0 0 0.5px; border-radius: 2px; /*border-bottom: 2px solid; color: #337AB7;*/">
                            <span>Descrição do video  que foi executado pelo professor neste dia.</span>
                        </div>
                    </a><a href="#" style="display: block; margin-bottom: 5px;">
                        <div style="padding: 5px; border: 1px solid #337AB7; box-shadow: 0 0 0.5px; border-radius: 2px; /*border-bottom: 2px solid; color: #337AB7;*/">
                            <span>Descrição do video  que foi executado pelo professor neste dia.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection