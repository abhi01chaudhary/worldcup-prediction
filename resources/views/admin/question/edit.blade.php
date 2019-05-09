@extends('admin.main')
@section('content')
    <section class="content-header">
        <h1>
            Edit Question
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
                            {!! Form::model($question, [
                                'route' => ['question.update', $question->id],
                                'class' => 'form-horizontal',
                                'method'=> 'PUT',
                                'files'=> true
                                ])
                            !!}

                            <div class="row">
                                <div class="col-md-10">
                                    @include('admin.question.form')
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