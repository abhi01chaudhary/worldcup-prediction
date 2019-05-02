@extends('admin.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Fixtures
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
                                    <th>First Team</th>
                                    <th>Second Team</th>
                                    <th>Round Name</th>
                                    <th>Stadium</th>
                                    <th>Fixture Time</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach( $fixtures as $fixture )  

                                    <?php

                                        $teamFirst = App\Models\Country::where('id', $fixture->team_first_id)->first();

                                        $teamSecond = App\Models\Country::where('id', $fixture->team_second_id)->first();

                                        $round = App\Models\Round::where('id', $fixture->round_id)->first();

                                        // $group = App\Models\Group::where('id', $fixture->group_id)->first();
                                    ?>

                                    <tr>
                                        <td>{{ $i++ }}</td>

                                        <td>{{ $teamFirst->name }} <br> {{ Html::image($teamFirst->flag_image , '', ['width'=>'40px','height'=>'40px']) }}</td> 

                                        <td>{{ $teamSecond->name }} <br> {{ Html::image($teamSecond->flag_image , '', ['width'=>'40px','height'=>'40px']) }}</td> 

                                        <td>
                                           {{ $round->round_name }}
                                        </td>

                                        <td>{{ $fixture->stadium->name }} <br> {{ Html::image($fixture->stadium->thumbnail , '', ['width'=>'50px','height'=>'50px']) }}</td>

                                        <td>{{ date("F j, Y, g:i a",strtotime($fixture->fixture_time)) }}</td>

                                        <td>
                                            <a href="{{ url('admin/fixtures/'.$fixture->id.'/edit' ) }}" class=" btn btn-primary btn-sm">
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