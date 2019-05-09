@extends('admin.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Question
            <a href="{{ url('admin/quiz-create') }}" class="btn btn-success">Add Question</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                @include('admin.flash.message')

                <div class="box">
                    <div class="box-body">
                        <div class="table-reponsive">
                            <table id="article" class="table table-bordered table-striped category-list">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Option (Correct)</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach($questions as $question)
                                    <?php
                                        $questionOptions = App\Models\QuestionOption::where('question_id', $question->id)->get();
                                    ?>
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $question->question_text }}</td>                                        
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
                                        <td>
                                            <a href="{{ url('admin/question/'.$question->id.'/view' ) }}" class=" btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
    
                                            <a href="{{ url('admin/question/'.$question->id.'/edit' ) }}" class=" btn btn-primary btn-sm">
                                                <i class="flaticon-edit"></i>
                                            </a>

                                            <a href="{{ url('admin/question/'.$question->id.'/delete' ) }}" class=" btn btn-danger btn-sm">
                                                <i class="flaticon-delete-button"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </section><!-- /.content -->

<script>
    $(function () {
        $('#article').DataTable({
            "bPaginate": false
        });
    });
</script>

@stop