<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto Sida</title>
    <link rel="stylesheet" href="assets/Site/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="background">
            <div class="menu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('sida')}}">Sida</a></li>
                            <li><a href="{{route('alfabetizacao')}}">Alfabetização</a></li>
                            <li><a href="{{route('contato')}}">Contato</a></li>
                            <li class="pull-right"><a href="{{route('dashboard')}}">Projeto Sida</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('conteudo')

    <footer class="@yield('class-footer')">
        <div class="container pad-t-20">
            <div class="col-md-2 menu-footer">
                <li><a href="{!! route('home') !!}">Home</a></li>
                <li><a href="{!! route('home') !!}">Sida</a></li>
                <li><a href="{!! route('home') !!}">Alfabetização</a></li>
                <li><a href="{!! route('contato') !!}">Contato</a></li>
            </div>

            <div class="col-md-2 col-md-offset-2">
                <p class="titulo-contato-footer">Contato</p>
                <p>(65) 3223-0963</p>
            </div>

            <div class="col-md-2 col-md-offset-4">
                <a href="{{route('home')}}">
                    {!! Html::image('assets/imgs/logo/logoprojetosida2.png', 'Projeto Sida', ['class' => ' max-w-100']) !!}
                </a>
            </div>

        </div>
    </footer>


    {!! Html::script('assets/js/jquery-3.1.0.min.js') !!}
    {!! Html::script('assets/Site/js/site.js') !!}
</body>
</html>