@extends('admin.main')

@section('content')
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <section class="content-header">
        <h1>
            Question
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

                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">

                                <?php
                                    $questionOptions = App\Models\QuestionOption::where('question_id', $question->id)->get();
                                ?>
                                <tr>
                                    <th>Question Text</th>
                                    <td>{!! $question->question_text !!}</td>
                                </tr>
                                <tr>
                                    <th>Options</th>
                                    <td>
                                        @foreach($questionOptions as $option)
                                            <li>
                                                {{ $option->option }} 
                                                {{-- {{ $option->correct }} --}}
                                                @if($option->correct == 1)
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                @else 
                                                    <i class="fa fa-close" aria-hidden="true"></i>
                                                @endif
                                            </li>
                                        @endforeach
                                    </td> 
                                </tr>                       
                                <tr>
                                    <th>Answer Explanation</th>
                                    <td>{!! $question->answer_explanation!!}</td>
                                </tr>
                            </table>
                            <a href="{{ url('admin/question') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@stop