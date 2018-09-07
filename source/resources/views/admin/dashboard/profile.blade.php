@extends('admin.main')

@section('content')
    {{----}}
    <section class="content-header">
        <h1>
            @if(Auth::user())
                <strong>{{ $user->first_name.' '.$user->last_name }} </strong>
            @endif
            Profile
        </h1>

    </section>

    <section class="content">
        <div class="row ">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="form-group">

                        <div class="col-md-4  profile-info">
                            <label for="first_name" class=" control-label">First Name:  </label><span>&nbsp;{{ $user->first_name }} </span>

                            <br>

                            <label for="first_name" class=" control-label">last Name:  </label><span>&nbsp;{{ $user->last_name }} </span>

                            <br>

                            <label for="email" class=" control-label">Email:</label><span>&nbsp;{{ $user->email }}</span>
                            <br>

                            <label for="role" class=" control-label">Role:

                            </label><span>&nbsp;
                                @if($user->user_role_id == 1)
                                    Admin
                                @elseif($user->user_role_id == 2)
                                    Staff
                                @endif
                          </span>
                            <br>
                            <label for="email" class=" control-label">Mobile:</label><span>&nbsp;{{ $user->mobile }}</span>
                            <br>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="content-header">
        <h1>
            Change Basic Information:
        </h1>

    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-info">
                    {{ Form::model($user, ['url'=>'admin/profile/update-basic-information', 'method' => 'post',  'class' => 'form-horizontal update-user',
                      'url'=>['admin/profile/update-basic-information'] ]) }}
                    <div class="box-body">

                        @if(Session::has('basic_message'))
                            <div class="content_top" style="background-color:#EFFCEF;">
                                <div class="alert alert-success" style="color:seagreen;">
                                    <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">&times;</button>
                                {{ session('basic_message') }}  <!-- equivalent to Session::get('flash_message') -->
                                </div>
                            </div>
                        @endif

                        <div class="box-body">

                            <div class="form-group">
                                <label for="first_name" class="col-sm-2 control-label">First Name<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
                                <div class="col-sm-10">
                                    {!! Form::text('first_name', null , ['class'=> 'form-control', 'placeholder' => 'First Name', 'id'=>"first_name"]) !!}
                                    <span class="error-message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="last_name" class="col-sm-2 control-label">Last Name<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
                                <div class="col-sm-10">
                                    {!! Form::text('last_name', null , ['class'=> 'form-control', 'placeholder' => 'Last Name', 'id'=>"last_name"]) !!}
                                    <span class="error-message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label">Mobile<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
                                <div class="col-sm-10">
                                    {!! Form::text('mobile', null , ['class'=> 'form-control', 'placeholder' => 'Mobile', 'id'=>"mobile"]) !!}
                                    <span class="error-message"></span>
                                </div>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-warning pull-right">Update</button>
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>

    {{--</section>--}}

    <section class="content-header">
        <h1>
            Change Password:
        </h1>

    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-info">
                    {{ Form::open(['url'=>'admin/profile/update-password', 'method'=>'POST', 'class' => 'form-horizontal update-user']) }}

                    <div class="box-body">

                        @include('admin.flash.message')

                        <div class="form-group">
                            <label for="oldPassword" class="col-sm-2 control-label">Old Password<span class=help-block"
                                                                                                      style="color: #b30000">&nbsp;* </span></label>

                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="current_password" id="oldPassword">
                                <span class="error-message"></span>

                            </div>

                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">New Password<span class=help-block"
                                                                                                   style="color: #b30000">&nbsp;* </span></label>

                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password" id="password">
                                <span class="error-message"></span>

                            </div>

                        </div>

                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-2 control-label">Confirm Password<span
                                        class=help-block" style="color: #b30000">&nbsp;* </span></label>

                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password_confirmation"
                                       id="confirmPassword">
                                <span class="error-message"></span><br>


                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-warning pull-right">Update</button>
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>

    </section>
    {{----}}
@stop