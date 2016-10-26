@extends('Site.templates.site')

@section('conteudo')
    <div class="bg-azul pad-b-20">
    <section class="container">
        <h1 class="text-center titulo branco">Resumo</h1>
        <div class="row resumo">
            <div class="col-md-4">
                {!! Html::image('assets/imgs/logo/logoprojetosida2.png') !!}
            </div>

            <div class="col-md-4 justificado">
                <p>Atualmente pessoas com deficiência auditiva são prejudicados pela carência de interpretes em
                    sala de aula e diante disso estas pessoas tem uma formação com baixa qualidade, acarretando
                    em um profissional despreparado. Outro ponto é a falta de instituições preparadas para
                    receber estes alunos, fazendo com que eles tenham poucas opções de profissionalização.
                </p>
                <p>Observando que os professores estão despreparados para lidar com esse aluno e acreditando que
                    eles se sentem de certa forma excluída ou impotente mediante a situação, as instituições
                    disponibilizam interpretes de Libras para que possam ser incluídos em sala de aula.
                </p>
            </div>

            <div class="col-md-4 justificado">
                <p>Sabendo que isso dispõe de muitos recursos, surgiu a ideia de incluir um aluno com deficiência
                    auditiva sem a necessidade de um interprete de Libras presencial.
                </p>
                <p>Existem softwares que disponibilizam ao usuário esses recursos, como o Hand Talk, porém o seu
                    foco é para a área de turismo. Neste manual será apresentado o funcionamento de um software para
                    inclusão de dessas pessoas, com o intuito de fazer a tradução praticamente simultânea entre a
                    explanação do professor para a linguagem de sinais.
                </p>
            </div>
        </div>
    </section>
    </div>
@endsection

@section('class-footer')
    bg-amarelo
@endsection