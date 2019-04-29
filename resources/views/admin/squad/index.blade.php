@extends('admin.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Players in Squad
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Featured Image</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach($news as $new)
                                   
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $new->title }}</td>                                        
                                        <td>{{ $new->description }}</td>                                        
                                        <td>
                                            @if($new->thumbnail)
                                                {{ Html::image($new->thumbnail,'',['width'=>'80px','height'=>'80px']) }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ date("F j, Y, g:i a",strtotime($new->created_at)) }}</td>
                                        <td>

                                            <a href="{{ url('admin/news/'.$new->id.'/edit' ) }}" class=" btn btn-primary btn-sm">
                                                <i class="flaticon-edit"></i>
                                            </a>

                                            <form action="{{ route('news.destroy', array($new->id)) }}"
                                                  method="DELETE" class="delete-user-form">
                                                {!! csrf_field() !!}

                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="flaticon-delete-button"></i>
                                                </button>
                                            </form>

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