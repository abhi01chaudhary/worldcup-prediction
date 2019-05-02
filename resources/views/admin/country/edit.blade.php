@extends('admin.main')
@section('content')

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <section class="content-header">
        <h1>
            Edit Country
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

            @include('admin.flash.message')
            {{--@include('errors.list')--}}

            <!-- Horizontal Form -->
                <div class="box box-info">
                    <!-- form start -->
                    <div class="box-body">
                        <div class="row">
                            {!! Form::model($country, [
                                'route' => ['country.update', $country->id],
                                'class' => 'form-horizontal',
                                'method'=> 'PUT',
                                'files'=> true
                                ])
                            !!}

                            <div class="row">
                                <div class="col-md-10">
                                    @include('admin.country.form')
                                </div>
                            </div>

                            <div class="text-right border-top">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@stop