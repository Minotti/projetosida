<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Projeto Sida</title>
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/font-awesome.css') !!}
    {!! Html::style('assets/dashboard/css/dashboard.css') !!}
</head>
<body class="bg-login">
    <section>
        <div class="middlePage">
            <div class="page-header">
                <h1>Projeto Sida</h1>
                <small>Bem vindo ao Dashboard</small>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Por favor, selecione uma opção</h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('login')]) !!}
                    <div class="col-md-4">
                        <div class="form-group login-opt">
                            <label>
                                {!! Form::radio('tipo', 'professor', true) !!}
                                <i class="fa fa-circle-o "></i> <i class="fa fa-dot-circle-o "></i>
                                <span>Professor</span>
                            </label>
                        </div>

                        <div class="form-group login-opt">
                            <label>
                                {!! Form::radio('tipo', 'aluno') !!}
                                <i class="fa fa-circle-o "></i> <i class="fa fa-dot-circle-o "></i>
                                <span>Aluno</span>
                            </label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Login</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                                {!! Form::input('text', 'email', null, ['class' => 'form-control', 'aria-describedby'=>'basic-addon1']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fw fa-key"></i></span>
                                {!! Form::input('password', 'password', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        {!! Form::submit('Entrar', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </section>
</body>
</html>