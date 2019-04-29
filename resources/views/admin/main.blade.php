<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>{{ $title }}</title>

<!-- Tell the browser to be responsive to screen width -->

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" href="{{ URL::asset('image/favicon32x32.png') }}" sizes="32x32"/>
<link rel="icon" href="{{ URL::asset('image/fab192x192.png') }}" sizes="192x192"/>
<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('image/fab180x180.png') }}"/>

    <!-- Bootstrap 3.3.5 -->

{{ Html::style('backend/bootstrap/css/bootstrap.min.css') }}

<!-- Font Awesome -->

{{ Html::style('backend/font-awesome/font-awesome.min.css') }}

<!-- Ionicons -->

{{ Html::style('backend/font-awesome/ionicons.min.css') }}


<!-- {{ Html::style('backend/plugins/datepicker/datepicker3.css') }} -->

<!-- {{ Html::style('backend/plugins/daterangepicker/daterangepicker-bs3.css') }} -->


{{ Html::style('backend/fonts/font/flaticon.css') }}

<!-- Select2 -->

{{ Html::style('backend/plugins/select2/select2.min.css') }}

{{ Html::style('backend/choosen/css/chosen.min.css') }}

<!-- Theme style -->

{{ Html::style('backend/dist/css/AdminLTE.min.css') }}

{{ Html::style('backend/dist/css/skins/skin-blue.min.css') }}


{{ Html::style('backend/plugins/iCheck/all.css') }}

{{ Html::style('backend/dist/css/sweetalert.css') }}

<!-- DataTables -->

{{ Html::style('backend/plugins/datatables/dataTables.bootstrap.css') }}

{{  Html::style('backend/css/worldcup.css') }}

{{ Html::style('backend/css/radiobutton.css') }}

{{ Html::style('backend/css/gallery.css') }}

{{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css') }}

<!-- {{ Html::style('backend/plugins/timepicker/bootstrap-timepicker.css') }} -->

{{ Html::script('backend/js/html5shiv.min.js') }}

{{ Html::script('backend/js/respond.min.js') }}

{{ Html::script('backend/plugins/jQuery/jQuery-2.1.4.min.js') }}

{{ Html::style('http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css') }}

{{ Html::style('http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css') }}

{{ Html::script('http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js')}}

{{ Html::script('http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js')}}

{{ Html::script('http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js')}}

{{ Html::script('http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js')}}

</head>


<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">


<!-- Main Header -->

    <header class="main-header">


        <!-- Logo -->

        <a href="{{ url('admin/dashboard') }}" class="logo">

            <!-- mini logo for sidebar mini 50x50 pixels -->

            <span class="logo-mini">LT</span>

            <!-- logo for regular state and mobile devices -->

            <span class="logo-lg">

               {{ Html::image('image/royalcup.png', '') }}

            </span>

        </a>


        <!-- Header Navbar -->

        <nav class="navbar navbar-static-top" role="navigation">

            <!-- Sidebar toggle button-->

            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

                <span class="sr-only">Toggle navigation</span>

            </a>

            <!-- Navbar Right Menu -->

            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">


                @if(Auth::user())

                    <!-- User Account Menu -->

                        <li class="dropdown user user-menu">

                            <!-- Menu Toggle Button -->

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <!-- The user image in the navbar-->


                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}


                            <!-- hidden-xs hides the username on small devices so only the image appears. -->

                            <!-- {{--<span class="hidden-xs"> {{ Auth::user()->first_name }}</span>--}} -->

                            </a>

                            <ul class="dropdown-menu">

                                <!-- The user image in the menu -->

                                <li class="user-header">


                                    {{ Html::image('backend/dist/img/avatar5.png', 'User Image', ['class'=>'img-circle']) }}

                                    <p>

                                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}


                                    </p>


                                </li>


                                <!-- Menu Body -->


                                <!-- Menu Footer-->

                                <li class="user-footer">

                                    <div class="pull-left">

                                        <a href="{{ url('admin/profile') }}" class="btn btn-default">Profile</a>

                                    </div>

                                    <div class="pull-right">

                                        <a href="{{ url('admin/logout') }}" class="btn btn-warning">Sign out</a>

                                    </div>

                                </li>

                            </ul>

                        </li>

                        <!-- Control Sidebar Toggle Button -->

                </ul>
                @endif

            </div>

        </nav>

    </header>

    <!-- Left side column. contains the logo and sidebar -->

    <aside class="main-sidebar">


        <!-- sidebar: style can be found in sidebar.less -->

        <section class="sidebar">


            <!-- Sidebar Menu -->

            <ul class="sidebar-menu nav" id="side-menu">


                <!-- Optionally, you can add icons to the links -->


                @if(Auth::user())

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Country</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('admin/country/create') }}">Add Country</a></li>
                            <li><a href="{{ url('admin/country') }}">All Countries</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>News</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('admin/news/create') }}">Add News</a></li>
                            <li><a href="{{ url('admin/news') }}">All News</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Stadium</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('admin/stadium/create') }}">Add New Stadium</a></li>
                            <li><a href="{{ url('admin/stadium') }}">All Stadiums</a></li>
                        </ul>
                    </li>

                     <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Fixtures</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('admin/fixture/create') }}">Add New Fixture</a></li>
                            <li><a href="{{ url('admin/fixture') }}">All Fixtures</a></li>
                        </ul>
                    </li>

                @endif


            </ul>
            <!-- /.sidebar-menu -->

        </section>

        <!-- /.sidebar -->

    </aside>


    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">


        @yield('content')


    </div>
    <!-- /.content-wrapper -->

    @include('admin.partials.popUpModal')

    <div class="control-sidebar-bg"></div>

</div>



<script type="text/javascript">

    var APP_URL = {!! json_encode(url('/')) !!};

</script>


<![endif]-->


{{ Html::script('backend/bootstrap/js/bootstrap.min.js') }}

{{ Html::script('backend/dist/js/sweetalert.min.js') }}

{!! Html::script('backend/plugins/iCheck/icheck.min.js') !!}

{{ Html::script('backend/plugins/select2/select2.full.min.js') }}

{{ Html::script('backend/choosen/js/chosen.jquery.min.js') }}

{{ Html::script('backend/plugins/ckeditor/ckeditor.js') }}

{{ Html::script('backend/plugins/datatables/jquery.dataTables.min.js') }}

{{ Html::script('backend/plugins/datatables/dataTables.bootstrap.min.js') }}

{{ Html::script('backend/dist/js/app.min.js') }}

{{ Html::script('backend/js/worldcup.js') }}

{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js') }}

{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/locale/nl.js') }}

{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js') }}



<script>
    $(function () {
        $(".select2").select2();
    });
</script>

<style>
    .select2-results__option[aria-selected=true] {
        display: none;
    }
</style>

<script type="text/javascript">
jQuery(document).ready(function () {

    jQuery('#fixture_time').datetimepicker({ format: 'dd/MM/yyyy hh:mm:ss' });

});
</script> 

<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            locale:'en'
        });
    });
</script>


<script>

    $(function () {

        var url = window.location;

        var element = $('ul.sidebar-menu a').filter(function () {

            return this.href == url || url.href.indexOf(this.href) == 0;

        }).addClass('active').parent().parent().addClass('in').parent();

        if (element.is('li')) {

            element.addClass('active');

        }
    });

</script>

<script>
    $(function () {

        $(document).on('change', '.category_name' ,function (data) {
            var category_name = $(this).val();

            category_name = category_name.replace(/\s+/g, '-').toLowerCase();

            $('.generate_category_slug').val(category_name);

        });

    });
</script>

</body>

</html>












