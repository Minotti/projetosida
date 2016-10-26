@extends('Dashboard.templates.dashboard')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <p class="panel-title">Sala</p>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <video class="video" width="80%" autoplay src="/assets/Conteudos/apresentacao/ola.mp4">
                    </video>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon rect" style="cursor: pointer;"><i class="fa fa-microphone"></i></span>
                            <div id="transcricao" class="form-control">Clique para interagir.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{!!Html::script('assets/js/recognition.js')!!}
@endsection