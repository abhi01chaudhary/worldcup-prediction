<div class="box-body">
    <div class="form-group">
        <label for="player_name" class="col-sm-2 control-label">Player Name<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-10">
            {!! Form::text('player_name', null , ['class'=> 'form-control', 'placeholder' => 'Player name', 'id'=>"player_name"]) !!}
            @if ($errors->has('player_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('player_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <input type="hidden" name="country_id" value="{{ $country->id }}">
    
    @if(Request::segment(4) != 'edit')  
        <div class="form-group">
            <label for="profile_image" class="col-sm-2 control-label">Profile Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                        name="profile_image" type="file" placeholder="" id="profile_image">
                <div>
                    <img width="150px" id="image"/>
                </div>
                @if ($errors->has('profile_image'))
                    <span class="help-block">
                    <strong>{{ $errors->first('profile_image') }}</strong>
                </span>
                @endif
            </div>
        </div>
    @else
        <div class="form-group ">
            <label for="profile_image" class="col-sm-2 control-label">Profile Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" name="profile_image" type="file" placeholder="" value="{{ $news->thumbnail }}">
                Upload Image
                <div>
                    @if($squad->profile_image)
                        {{ Html::image($squad->profile_image,'',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @else
                        {{ Html::image('backend/dist/img/Not_available.jpg','',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @endif
                </div>
                @if ($errors->has('profile_image'))
                    <span class="help-block">
                    <strong>{{ $errors->first('profile_image') }}</strong>
                </span>
                @endif
            </div>
        </div>
    @endif

    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">Age<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-10">
            {!! Form::text('age', null , ['class'=> 'form-control', 'placeholder' => 'Age', 'id'=>"age"]) !!}
            @if ($errors->has('age'))
                <span class="help-block">
                    <strong>{{ $errors->first('age') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="speciality" class="col-sm-2 control-label">Speciality<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
        <div class="col-sm-10">
            {{ Form::select('speciality[]', $specialities, null, ['data-placeholder'=>"Select Speciality", 'class'=>'form-control category select2','multiple'=>true]) }}
            @if ($errors->has('speciality'))
                <span class="help-block">
                    <strong>{{ $errors->first('speciality') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-group">
        <label for="brief_intro" class="col-sm-2 control-label ">Brief Intro</label>
        <div class="col-sm-10">
            {!! Form::textarea('brief_intro', null , ['class'=> 'form-control ckeditor', 'placeholder' => 'brief_intro', 'id'=>"brief_intro"]) !!}
            @if ($errors->has('brief_intro'))
                <span class="help-block">
                  <strong>{{ $errors->first('brief_intro') }}</strong>
               </span>
            @endif
            <span class="error-message"></span>
        </div>
    </div>

    <div class="form-group">
        <label for="news" class="col-sm-2 control-label ">News</label>
        <div class="col-sm-10">
            {!! Form::textarea('news', null , ['class'=> 'form-control ckeditor', 'placeholder' => 'News', 'id'=>"news"]) !!}
            @if ($errors->has('news'))
                <span class="help-block">
                    <strong>{{ $errors->first('news') }}</strong>
                </span>
            @endif
            <span class="error-message"></span>
        </div>
    </div>

</div>

