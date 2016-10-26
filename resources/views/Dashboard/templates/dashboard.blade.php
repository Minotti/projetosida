<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {{--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">--}}
    <!-- Bootstrap 3.3.7 -->
    {!! Html::style('assets/dashboard/css/dashboard.css') !!}
    {!! Html::style('assets/dashboard/bootstrap/css/bootstrap.css') !!}

    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">--}}
    {!! Html::style('assets/css/font-awesome.css') !!}

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    {{--<link rel="stylesheet" href="dist/css/AdminLTE.min.css">--}}
    {!! Html::style('assets/dashboard/dist/css/AdminLTE.min.css') !!}

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{--<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">--}}
    {!! Html::style('assets/dashboard/dist/css/skins/_all-skins.min.css') !!}

    <!-- iCheck -->
    {{--<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">--}}
    {{--{!! Html::style('assets/dashboard/plugins/iCheck/flat/blue.css') !!}--}}

    <!-- Morris chart -->
    {{--<link rel="stylesheet" href="plugins/morris/morris.css">--}}
    {{--{!! Html::style('assets/dashboard/plugins/morris/morris.css') !!}--}}

    <!-- jvectormap -->
    {{--<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">--}}
    {{--    {!! Html::style('assets/dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}--}}

    <!-- Date Picker -->
    {{--<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">--}}
    {{--    {!! Html::style('assets/dashboard/plugins/datepicker/datepicker3.css') !!}--}}

    <!-- Daterange picker -->
    {{--<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">--}}
    {{--    {!! Html::style('assets/dashboard/plugins/daterangepicker/daterangepicker.css') !!}--}}

    <!-- bootstrap wysihtml5 - text editor -->
    {{--<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">--}}
    {{--    {!! Html::style('assets/dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    {{--<!--[if lt IE 9]>--}}
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
    </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('Dashboard.templates.header')
    @include('Dashboard.templates.aside')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Projeto Sida
                <small>Versão 0.1</small>
            </h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
                {{--<li class="active">Dashboard</li>--}}
            {{--</ol>--}}
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.6
        </div>
        <strong>Projeto Sida - Powered by <a href="http://almsaeedstudio.com">Almsaeed Studio</a></strong>
    </footer>

    @include('Dashboard.templates.asideRight')
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
    <!-- jQuery 2.2.3 -->
    {{--<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>--}}
    {{--    {!! Html::script('assets/dashboard/plugins/jQuery/jquery-2.2.3.min.js') !!}--}}
    {{-- Jquery 3.1.0 --}}
    {!! Html::script('assets/js/jquery-3.1.0.min.js') !!}

    <!-- jQuery UI 1.11.4 -->
    {{--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>--}}
    {!! Html::script('assets/js/jquery-ui.min.js') !!}

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.7 alpha -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}

    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    {{--<script src="plugins/morris/morris.min.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/morris/morris.min.js') !!}

    <!-- Sparkline -->
    {{--<script src="plugins/sparkline/jquery.sparkline.min.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/sparkline/jquery.sparkline.min.js') !!}

    <!-- jvectormap -->
    {{--<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}

    {{--<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}

    <!-- jQuery Knob Chart -->
    {{--<script src="plugins/knob/jquery.knob.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/knob/jquery.knob.js') !!}

    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    {{--<script src="plugins/daterangepicker/daterangepicker.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/daterangepicker/daterangepicker.js') !!}

    <!-- datepicker -->
    {{--<script src="plugins/datepicker/bootstrap-datepicker.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/datepicker/bootstrap-datepicker.js') !!}

    <!-- Bootstrap WYSIHTML5 -->
    {{--<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}

    <!-- Slimscroll -->
    {{--<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/slimScroll/jquery.slimscroll.min.js') !!}

    <!-- FastClick -->
    {{--<script src="plugins/fastclick/fastclick.js"></script>--}}
    {!! Html::script('assets/dashboard/plugins/fastclick/fastclick.js') !!}

    <!-- AdminLTE App -->
    {{--<script src="dist/js/app.min.js"></script>--}}
    {!! Html::script('assets/dashboard/dist/js/app.min.js') !!}

    {{-- JQuery Mask --}}
    {!! Html::script('assets/js/jquery.mask.min.js') !!}

    {{-- TinyMCE --}}
    {!! Html::script('assets/js/tinymce/tinymce.min.js') !!}

    {!! Html::script('assets/dashboard/js/main.js') !!}

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{--<script src="dist/js/pages/dashboard.js"></script>--}}

    <!-- AdminLTE for demo purposes -->
    {{--<script src="dist/js/demo.js"></script>--}}
    @yield('scripts')
</body>
</html>
