<div class="box-body">

<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name<span class=help-block"
                                                                 style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-10">

        {!! Form::text('name', null , ['class'=> 'form-control category_name', 'placeholder' => 'Name', 'id'=>"name"]) !!}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>

</div>

 <div class="form-group">

    <label for="slug" class="col-sm-2 control-label">Slug<span class=help-block" style="color: #b30000">&nbsp;* </span></label>

    <div class="col-sm-10">

        {!! Form::text('slug', null , ['class'=> 'form-control generate_category_slug', 'placeholder' => 'Slug', 'id'=>"slug"]) !!}

    </div>
</div>


<div class="form-group">
    <label for="Description" class="col-sm-2 control-label ">Description<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-10">
        {!! Form::textarea('description', null , ['class'=> 'form-control ckeditor', 'placeholder' => 'description', 'id'=>"description"]) !!}
        @if ($errors->has('description'))
            <span class="help-block">
              <strong>{{ $errors->first('description') }}</strong>
           </span>
        @endif
        <span class="error-message"></span>
    </div>
</div>


@if(Request::segment(4) != 'edit')
        <div class="form-group">
            <label for="thumbnail" class="col-sm-2 control-label">Thumbnail Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                       name="thumbnail" type="file" placeholder="" id="thumbnail" >

                <div>
                    <img width="150px" id="image"/>
                </div>

                @if ($errors->has('thumbnail'))
                    <span class="help-block">
                    <strong>{{ $errors->first('thumbnail') }}</strong>
                </span>
                @endif

            </div>
        </div>
    @else
        <div class="form-group ">
            <label for="thumbnail" class="col-sm-2 control-label">Thumbnail Image <span class=help-block" style="color: #b30000">&nbsp;* </span></label>
            <div class="col-sm-10">
                <input onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                       name="thumbnail" type="file" placeholder="" value="{{ $stadium->thumbnail }}">
                Upload Image
                <div>
                    @if($stadium->thumbnail)
                        {{ Html::image($stadium->thumbnail,'',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @else
                        {{ Html::image('backend/dist/img/Not_available.jpg','',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
                    @endif


                </div>
                @if ($errors->has('thumbnail'))
                    <span class="help-block">
                    <strong>{{ $errors->first('thumbnail') }}</strong>
                </span>
                @endif

            </div>
        </div>

    @endif

<div class="form-group">
    <label for="city" class="col-sm-2 control-label ">city<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-4">
        
        {!! Form::text('city', null , ['class'=> 'form-control', 'placeholder' => 'city', 'id'=>"city"]) !!}
        
        @if ($errors->has('city'))
            <span class="help-block">
              <strong>{{ $errors->first('city') }}</strong>
           </span>
        @endif
        
        <span class="error-message"></span>
    </div>
</div>

<div class="form-group">
    <label for="capacity" class="col-sm-2 control-label ">Seating Capacity</label>
    <div class="col-sm-4">
        {!! Form::text('seating_capacity', null , ['class'=> 'form-control', 'placeholder' => 'seating_capacity', 'id'=>"city"]) !!}
        @if ($errors->has('seating_capacity'))
            <span class="help-block">
              <strong>{{ $errors->first('seating_capacity') }}</strong>
           </span>
        @endif
        <span class="error-message"></span>
    </div>
</div>


