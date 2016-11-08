<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                {!! Html::image("assets/dashboard/dist/img/user2-160x160.jpg", 'User Image', ['class'=>'img-circle']) !!}}
                {{--<img src="assets/dashboard/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
            </div>
            <div class="pull-left info">
                <p style="white-space: normal;">{!! Auth::user()->name !!}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Navegação Principal</li>
            <li>
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-fw fa-home"></i> <span>Inicio</span>
                </a>
            </li>

            @is('professor')
                <li>
                    <a href="{{route('lecionar')}}">
                        <i class="fa fa-fw fa-cubes"></i> <span>Lecionar</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('sugestoes')}}">
                        <i class="fa fa-fw fa-info"></i> <span>Sugestões</span>
                    </a>
                </li>
            @endis

            @is('aluno')
            <li>
                <a href="{{route('sala-aluno')}}">
                    <i class="fa fa-fw fa-sign-in"></i> <span>Sala</span>
                </a>
            </li>

            <li>
                <a href="{{route('revisao-escolar')}}">
                    <i class="fa fa-fw fa-book"></i> <span>Revisão Escolar</span>
                </a>
            </li>
            @endis

            <li>
                <a href="{{route('manual')}}">
                    <i class="fa fa-fw fa-hand-paper-o"></i> <span>Manuais</span>
                </a>
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-dashboard"></i><span>Sistema</span><i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li class="active"><a href="{{route('dashboard')}}"><i class="fa fa-fw fa-dashboard"></i>Início</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="label label-primary pull-right">4</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('base.usuarios')}}"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="{{route('base.usuarios')}}"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="{{route('base.usuarios')}}"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="{{route('base.usuarios')}}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>
            <li class="header">LABELS</li>
            <li><a href="{{route('base.usuarios')}}"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>--}}
        </ul>
    </section>
</aside>