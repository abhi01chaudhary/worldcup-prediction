<div class="box-body">

<div class="form-group">
    <label for="first_team" class="col-sm-2 control-label">First Opponent<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-5">
        @if(Request::segment(4) != 'edit')

            {{ Form::select('team_first_id', $teams, null, ['placeholder'=>"Select First Team", 'class'=>'form-control']) }}

            @if ($errors->has('team_first_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('team_first_id') }}</strong>
                </span>
            @endif

        @else

            {{ Form::select('team_first_id', $teams, $selectedTeams, ['placeholder'=>"Select First Team", 'class'=>'form-control']) }}

        @endif
    </div>
</div>

<div class="form-group">
    <label for="first_team" class="col-sm-2 control-label">Second Opponent<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-5">
        @if(Request::segment(4) != 'edit')

            {{ Form::select('team_second_id', $teams, null, ['placeholder'=>"Select Second Team", 'class'=>'form-control']) }}
            
            @if ($errors->has('team_second_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('team_second_id') }}</strong>
                </span>
            @endif

        @else

            {{ Form::select('team_second_id', $teams, $selectedTeams, ['placeholder'=>"Select Second Team", 'class'=>'form-control']) }}

        @endif
    </div>
</div>

<div class="form-group">
    <label for="round" class="col-sm-2 control-label">Round<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-5">
        @if(Request::segment(4) != 'edit')

            {{ Form::select('round_id', $rounds, null, ['data-placeholder'=>"Select Round", 'class'=>'form-control category select2','multiple'=>true]) }}

            @if ($errors->has('round_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('round_id') }}</strong>
                </span>
            @endif

        @else

            {{ Form::select('round_id', $rounds, $selectedRounds, ['data-placeholder'=>"Select Round", 'class'=>'form-control category select2','multiple'=>true]) }}

        @endif
    </div>
</div>


{{-- <div class="form-group">

    <label for="group" class="col-sm-2 control-label">Group<span class=help-block" style="color: #b30000">&nbsp;* </span></label>

    <div class="col-sm-5">

        @if(Request::segment(4) != 'edit')

            {{ Form::select('group_id', $groups, null, ['data-placeholder'=>"Select Second Team", 'class'=>'form-control category select2','multiple'=>true]) }}
            
            @if ($errors->has('group_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('group_id') }}</strong>
                </span>
            @endif


        @else

            {{ Form::select('group_id', $groups, $selectedgroups, ['data-placeholder'=>"Select Second Team", 'class'=>'form-control category select2','multiple'=>true]) }}

        @endif

    </div>

</div> --}}

<div class="form-group">

    <label for="group" class="col-sm-2 control-label">Stadium<span class=help-block" style="color: #b30000">&nbsp;* </span></label>

    <div class="col-sm-5">

        @if(Request::segment(4) != 'edit')

            {{ Form::select('stadium_id', $stadia, null, ['data-placeholder'=>"Select Stadium", 'class'=>'form-control category select2','multiple'=>true]) }}
            
            @if ($errors->has('stadium_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('stadium_id') }}</strong>
                </span>
            @endif


        @else

            {{ Form::select('stadium_id', $groups, $selectedgroups, ['data-placeholder'=>"Select Second Team", 'class'=>'form-control category select2','multiple'=>true]) }}

        @endif

    </div>

</div>

<div class="form-group">

    <label for="fixture_time" class="col-sm-2 control-label">Fixture Time<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
    
     <div class='col-sm-5'>

            <div class='input-group date' id='datetimepicker'>

                <input type='text' class="form-control" name="fixture_time" value=""/>

                @if ($errors->has('fixture_time'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fixture_time') }}</strong>
                    </span>
                @endif

                <span class="input-group-addon">

                    <span class="glyphicon glyphicon-calendar"></span>

                </span>

            </div>
     </div>
</div>

@if(Request::segment(4) == 'edit')
    <div class="form-group">
        <label for="winner" class="col-sm-2 control-label">Winner<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-10">
            {!! Form::text('winner', null , ['class'=> 'form-control', 'placeholder' => 'winner', 'id'=>"age"]) !!}
            @if ($errors->has('winner'))
                <span class="help-block">
                    <strong>{{ $errors->first('winner') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="team_first_runs_made" class="col-sm-2 control-label">Age<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-10">
            {!! Form::text('team_first_runs_made', null , ['class'=> 'form-control', 'placeholder' => 'Runs made by First Team', 'id'=>"age"]) !!}
            @if ($errors->has('team_first_runs_made'))
                <span class="help-block">
                    <strong>{{ $errors->first('team_first_runs_made') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="team_second_runs_made" class="col-sm-2 control-label">Age<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-10">
            {!! Form::text('team_second_runs_made', null , ['class'=> 'form-control', 'placeholder' => 'Runs made by Second Team', 'id'=>"team_second_runs_made"]) !!}
            @if ($errors->has('team_second_runs_made'))
                <span class="help-block">
                    <strong>{{ $errors->first('team_second_runs_made') }}</strong>
                </span>
            @endif
        </div>
    </div>
@endif


</div>