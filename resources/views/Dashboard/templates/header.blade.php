<header class="main-header">

    <!-- Logo -->
    <a href="{{route('dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>S</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Projeto</b>SIDA</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {!! Html::image("assets/dashboard/dist/img/user2-160x160.jpg", 'User Image', ['class'=>'user-image']) !!}
                        {{--<img src="assets/dashboard/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">--}}
                        <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            {!! Html::image("assets/dashboard/dist/img/user2-160x160.jpg", 'User Image', ['class'=>'img-circle']) !!}
                            {{--<img src="assets/dashboard/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}

                            <p>
                                Usuário - Função
                                <small>Membro desde dd/mm/yyyy</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sair</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>

    </nav>
</header>