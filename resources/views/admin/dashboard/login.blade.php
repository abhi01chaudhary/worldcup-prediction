<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="backend/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="backend/font-awesome/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="backend/font-awesome/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="backend/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="backend/plugins/iCheck/square/blue.css">

    <link rel="stylesheet" href="backend/css/tracker.css">

    {{ Html::script('backend/js/html5shiv.min.js') }}
    {{ Html::script('backend/plugins/jQueryQ/juery-2.1.4.min.js') }}
    {{ Html::script('backend/js/respond.min.js') }}
    {{ Html::script('backend/js/login.js') }}

    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="index2.html">{{ Html::image('image/royalcup.png', '') }}</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        {!! Form::open(['url'=>'admin' ,'class'=>'login-ajax']) !!}
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        {{--<input type="hidden" name="_token" value="{{Session::token()}}">--}}

        <div>
            <p style="color: red">{{ $errors->first('email') }}</p>
        </div>

        <div class="row">
            <div class="col-xs-8">

            </div><!-- /.col -->
            <div class="col-xs-4 text-right">
                <button type="submit" class="btn btn-warning">Sign In</button>
            </div><!-- /.col -->
        </div>
        {!! Form::close() !!}
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->



<!-- Bootstrap 3.3.5 -->
<script src="backend/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="backend/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
