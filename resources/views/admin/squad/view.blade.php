@extends('admin.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Players in {{ $country->name }}
            <a href="{{ url('admin/squad/'.$country->id.'/create' ) }}" class=" btn btn-success btn-sm">
                Add more players for {{ $country->name }}
            </a>
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
                                    <th>Player Name</th>
                                    <th>Profile Image</th>
                                    <th>Nationality</th>
                                    <th>Specialities</th>
                                    <th>Brief Information</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                @foreach($players as $player)
                                
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $player->player_name }}</td>                                        
                                        <td>
                                            @if($player->profile_image)
                                                {{ Html::image($player->profile_image,'',['width'=>'80px','height'=>'80px']) }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $player->country->name }}</td> 
                                        <td>
                                            @foreach($player->speciality as $speciality)
                                                <li>{{ $speciality->title }}</li>
                                            @endforeach
                                           
                                        </td>
                                        <td>
                                            {{  Illuminate\Support\Str::words($player->brief_intro, 30, '...') }}
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