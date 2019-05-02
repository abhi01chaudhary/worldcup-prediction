@extends('admin.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Overall Match Points
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
                                        <th>Country</th>
                                        <th>Winning History</th>
                                        <th>Total Matches Played</th>
                                        <th>Matches won</th>
                                        <th>Matches lost</th>
                                        <th>Match Points</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach( $countries as $country )  

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $country->name }} <br> {{ Html::image($country->flag_image , '', ['width'=>'30px','height'=>'30px']) }}</td> 
                                        <td>
                                            {{ $country->winning_history }}
                                        </td>
                                        <td>
                                           {{ $country->total_matches_played }}
                                        </td>
                                        {{-- <td>{{ $country->winning_count }}</td> --}}
                                        <td>2</td>
                                        {{-- <td>{{ $country->losing_count }}</td> --}}
                                        <td>2</td>
                                        {{-- <td>{{ $country->total_points }}</td> --}}
                                        <td>12</td>
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