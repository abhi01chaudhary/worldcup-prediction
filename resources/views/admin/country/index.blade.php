@extends('admin.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Countries <a href="{{ url('admin/country/create') }}" class="btn btn-success">Add a Country</a>
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
                                    <th>Country Name</th>
                                    <th>Flag</th>
                                    <th>Group</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach($countries as $country)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td><a href="{{ url('admin/squad/'.$country->id.'/view' )  }}">{{ $country->name }}</a></td>                                                                         
                                        <td>
                                            @if($country->flag_image)
                                                {{ Html::image($country->flag_image,'',['width'=>'80px','height'=>'80px']) }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>Group</td>
                                        <td>{{ date("F j, Y, g:i a",strtotime($country->created_at)) }}</td>
                                        <td>
                                            
                                            <a href="{{ url('admin/squad/'.$country->id.'/create' ) }}" class=" btn btn-success btn-sm">
                                                Add players to Squad
                                            </a>

                                            <a href="{{ url('admin/squad/'.$country->id.'/view' ) }}" class=" btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="{{ url('admin/country/'.$country->id.'/edit' ) }}" class=" btn btn-primary btn-sm">
                                                <i class="flaticon-edit"></i>
                                            </a>

                                            <a href="{{ url('admin/country/'.$country->id.'/delete' ) }}" class=" btn btn-danger btn-sm">
                                                <i class="flaticon-delete-button"></i>
                                            </a>

                                            {{-- <form action="{{ route('country.destroy', array($country->id)) }}"
                                                  method="DELETE" class="delete-user-form">
                                                {!! csrf_field() !!}

                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="flaticon-delete-button"></i>
                                                </button>
                                            </form> --}}

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