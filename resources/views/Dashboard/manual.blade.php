@extends('Dashboard.templates.dashboard')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <p class="panel-title">Manuais</p>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">Baixar Manual PDF</label>
                <a href="#baixarManual"><i class="fa fa-fw fa-file-pdf-o"></i></a>
            </div>

            <div class="form-group">
                <label class="control-label">Baixar Manual Word</label>
                <a href="#baixarManual"><i class="fa fa-fw fa-file-word-o"></i></a>
            </div>

            <div class="form-group">
                <label class="control-label">Baixar Manual PowerPoint</label>
                <a href="#baixarManual"><i class="fa fa-fw fa-file-powerpoint-o"></i></a>
            </div>

            <div class="form-group">
                <label class="control-label">Baixar Manual Libras</label>
                <a href="#baixarManual"><i class="fa fa-fw fa-deafness"></i></a>
            </div>
        </div>
    </div>
@endsection