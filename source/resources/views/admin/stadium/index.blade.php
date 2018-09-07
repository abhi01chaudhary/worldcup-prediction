@extends('admin.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Stadia
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
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Featured Image</th>
                                    <th>City</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach( $stadia as $stadium )  
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $stadium->name }}</td>                                        
                                        <td>{{ $stadium->description }}</td>                                        
                                        <td>
                                            @if($stadium->thumbnail)
                                                {{ Html::image($stadium->thumbnail,'',['width'=>'80px','height'=>'80px']) }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $stadium->city }}</td>   
                                        <td>{{ date("F j, Y, g:i a",strtotime($stadium->created_at)) }}</td>
                                        <td>
                                            <a href="{{ url('admin/stadiums/'.$stadium->id.'/edit' ) }}" class=" btn btn-primary btn-sm">
                                                <i class="flaticon-edit"></i>
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