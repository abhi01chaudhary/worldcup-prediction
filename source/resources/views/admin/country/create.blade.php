@extends('admin.main')

@section('content')
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <section class="content-header">
        <h1>
            Add a country
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

            @include('admin.flash.message')

            <!-- Horizontal Form -->
                <div class="box box-info">
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">

                            <div class="col-md-12">
                                {{ Form::open(['url'=>'admin/country', 'class'=>'form-horizontal', 'enctype'=>"multipart/form-data",'name'=>'myform']) }}

                                @include('admin.country.form')

                                <div class="text-right border-top">
                                    <button type="submit" class="btn btn-warning">Create</button>
                                </div>


                                {{ Form::close() }}
                            </div>

                        </div>
                    </div>
                </div><!-- /.box -->


            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@stop