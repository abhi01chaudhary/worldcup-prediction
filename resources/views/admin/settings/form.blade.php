<div class="box-body">

    <div class="form-group">
        <label for="app_name" class="col-sm-2 control-label">App Name</label>
        <div class="col-sm-8">
            {!! Form::text('app_name', null , ['class'=> 'form-control', 'placeholder' => 'App Name', 'id'=>"app_name"]) !!}
            @if ($errors->has('app_name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('app_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    @if(Request::segment(4) != 'edit')
        <div class="form-group">
            <label for="app_logo" class="col-sm-2 control-label">App Logo Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                        name="app_logo" type="file" placeholder="" id="app_logo" >
                <div>
                    <img width="150px" id="image"/>
                </div>
                @if ($errors->has('app_logo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('app_logo') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @else
        <div class="form-group">
            <label for="app_logo" class="col-sm-2 control-label">App Logo Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                        name="app_logo" type="file" placeholder="" value="{{ $setting->app_logo }}">
                Upload Image
                <div>
                    @if($setting->app_logo)
                        {{ Html::image($setting->app_logo,'',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @else
                        {{ Html::image('backend/dist/img/Not_available.jpg','',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @endif
                </div>
                @if ($errors->has('app_logo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('app_logo') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @endif
    
</div>
    
    
    
    
    
    
    
    