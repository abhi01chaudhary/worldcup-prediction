<div class="box-body">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Country Name<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-8">
            {{-- {!! Form::text('name', null , ['class'=> 'form-control category_name', 'placeholder' => 'Country name', 'id'=>"name"]) !!} --}}
            {{ Form::select('name', $nations, null, ['class'=>'form-control category_name', 'placeholder'=> 'Country Name', 'id' => 'name']) }}
            @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

     <div class="form-group">
        <label for="slug" class="col-sm-2 control-label">Slug<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-8">
            {!! Form::text('slug', null , ['class'=> 'form-control generate_category_slug', 'placeholder' => 'Slug', 'id'=>"slug"]) !!}
        </div>
    </div>

    @if(Request::segment(4) != 'edit')
        <div class="form-group">
            <label for="flag_image" class="col-sm-2 control-label">Flag Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                       name="flag_image" type="file" placeholder="" id="flag_image" >
                <div>
                    <img width="150px" id="image"/>
                </div>
                @if ($errors->has('flag_image'))
                    <span class="help-block">
                    <strong>{{ $errors->first('flag_image') }}</strong>
                </span>
                @endif
            </div>
        </div>
    @else
        <div class="form-group">
            <label for="flag_image" class="col-sm-2 control-label">Flag Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                       name="flag_image" type="file" placeholder="" value="{{ $advertisement->flag_image }}">
                Upload Image
                <div>
                    @if($advertisement->flag_image)
                        {{ Html::image($advertisement->flag_image,'',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @else
                        {{ Html::image('backend/dist/img/Not_available.jpg','',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @endif

                </div>
                @if ($errors->has('flag_image'))
                    <span class="help-block">
                    <strong>{{ $errors->first('flag_image') }}</strong>
                </span>
                @endif

            </div>
        </div>

    @endif

    {{-- <div class="form-group">
        <label for="category" class="col-sm-2 control-label">Select Group<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-5">

            {{ Form::select('group_id', $groups, null, ['placeholder'=>"Select a Group", 'class'=>'form-control select2']) }}

            @if ($errors->has('group_id'))
                    <span class="help-block">
                    <strong>{{ $errors->first('group_id') }}</strong>
                </span>
            @endif
        </div>
    </div> --}}

    <div class="form-group">
        <label for="rounds" class="col-sm-2 control-label">Select Round<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-5">

            {{ Form::select('round_id', $rounds, null, ['placeholder'=>"Select a Round", 'class'=>'form-control select2']) }}

            @if ($errors->has('round_id'))
                    <span class="help-block">
                    <strong>{{ $errors->first('round_id') }}</strong>
                </span>
            @endif

        </div>
    </div>

    {{-- <div class="form-group">
        <label for="total_goals_count" class="col-sm-2 control-label">Total Goals</label>
        <div class="col-sm-8">
            {!! Form::text('total_goals_count', null , ['class'=> 'form-control', 'placeholder' => 'Total goals', 'id'=>"total_goals_count"]) !!}
            @if ($errors->has('total_goals_count'))
                    <span class="help-block">
                    <strong>{{ $errors->first('total_goals_count') }}</strong>
                </span>
            @endif
        </div>
    </div> --}}

    <div class="form-group">
        <label for="total_runs_made" class="col-sm-2 control-label">Total Goals</label>
        <div class="col-sm-8">
            {!! Form::text('total_runs_made', null , ['class'=> 'form-control', 'placeholder' => 'Total runs made', 'id'=>"total_runs_made"]) !!}
            @if ($errors->has('total_runs_made'))
                    <span class="help-block">
                    <strong>{{ $errors->first('total_runs_made') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="total_matches_played" class="col-sm-2 control-label">Total Matches Played</label>
        <div class="col-sm-8">
            {!! Form::text('total_matches_played', null , ['class'=> 'form-control', 'placeholder' => 'Matches played', 'id'=>"total_matches_played"]) !!}
            @if ($errors->has('total_matches_played'))
                    <span class="help-block">
                    <strong>{{ $errors->first('total_matches_played') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="icc_world_ranking" class="col-sm-2 control-label">Icc World Ranking</label>
        <div class="col-sm-8">
            {!! Form::number('icc_world_ranking', null , ['class'=> 'form-control', 'placeholder' => 'Icc World Ranking', 'id'=>"icc_world_ranking"]) !!}
            @if ($errors->has('icc_world_ranking'))
                    <span class="help-block">
                    <strong>{{ $errors->first('icc_world_ranking') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="winning_history" class="col-sm-2 control-label">Team Winning History</label>
        <div class="col-sm-8">
            {!! Form::text('winning_history', null , ['class'=> 'form-control', 'placeholder' => 'Team winning History', 'id'=>"winning_history"]) !!}
            @if ($errors->has('winning_history'))
                    <span class="help-block">
                    <strong>{{ $errors->first('winning_history') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="country_news" class="col-sm-2 control-label ">News</label>
        <div class="col-sm-10">
            {!! Form::textarea('country_news', null , ['class'=> 'form-control ckeditor', 'placeholder' => 'Country News', 'id'=>"country_news"]) !!}
            @if ($errors->has('country_news'))
                <span class="help-block">
                    <strong>{{ $errors->first('country_news') }}</strong>
                </span>
            @endif
            <span class="error-message"></span>
        </div>
    </div>
</div>







