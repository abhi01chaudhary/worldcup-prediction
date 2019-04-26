<div class="box-body">

<div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title<span class=help-block"
                                                                 style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-10">

        {!! Form::text('title', null , ['class'=> 'form-control category_name', 'placeholder' => 'Title', 'id'=>"title"]) !!}

        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
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
    <label for="description" class="col-sm-2 control-label ">Description<span class=help-block" style="color: #b30000">&nbsp;* </span></label>
    <div class="col-sm-10">
        {!! Form::textarea('description', null , ['class'=> 'form-control ckeditor', 'placeholder' => 'Description', 'id'=>"description"]) !!}
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
                       name="thumbnail" type="file" placeholder="" value="{{ $news->thumbnail }}">
                Upload Image
                <div>
                    @if($news->thumbnail)
                        {{ Html::image($news->thumbnail,'',['width'=>'100px','id'=>'image', 'class'=>'table-team-img']) }}
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
    <label for="" class="col-sm-2 control-label">Schedule News</label>
    <div class='col-sm-4'>
        <div class='input-group date' id='datetimepicker'>
            <input type='date' class="form-control" name="schedule_news"/>
        </div>
    </div>
</div>

