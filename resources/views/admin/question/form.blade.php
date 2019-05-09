<div class="box-body">
    <div class="form-group">
        <div class="col-xs-12 form-group">
            {!! Form::label('question_text', 'Question text*', ['class' => 'control-label']) !!}
            {!! Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
            @if ($errors->has('question_text'))
                <span class="help-block">
                    <strong>{{ $errors->first('question_text') }}</strong>
                </span>
            @endif
        </div>
    </div>

    @if(Request::segment(4) != 'edit')
        <div class="form-group">
            {!! Form::label('option1', 'Option #1', ['class' => 'control-label']) !!}
            {!! Form::text('option1', old('option1'), ['class' => 'form-control ', 'placeholder' => '']) !!}
            @if ($errors->has('option1'))
                <span class="help-block">
                    <strong>{{ $errors->first('option1') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('option2', 'Option #2', ['class' => 'control-label']) !!}
            {!! Form::text('option2', old('option2'), ['class' => 'form-control ', 'placeholder' => '']) !!}
            @if($errors->has('option2'))
                <span class="help-block">
                    <strong>{{ $errors->first('option2') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('option3', 'Option #3', ['class' => 'control-label']) !!}
            {!! Form::text('option3', old('option3'), ['class' => 'form-control ', 'placeholder' => '']) !!}
            @if($errors->has('option3'))
                <span class="help-block">0
                    <strong>{{ $errors->first('option3') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('option4', 'Option #4', ['class' => 'control-label']) !!}
            {!! Form::text('option4', old('option4'), ['class' => 'form-control ', 'placeholder' => '']) !!}
            @if($errors->has('option4'))
                <span class="help-block">
                    <strong>{{ $errors->first('option4') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('option5', 'Option #5', ['class' => 'control-label']) !!}
            {!! Form::text('option5', old('option5'), ['class' => 'form-control ', 'placeholder' => '']) !!}
            @if($errors->has('option5'))
                <span class="help-block">
                    <strong>{{ $errors->first('option5') }}</strong>
                </span>
            @endif
        </div>
    @else   
        <?php 
            $i = 1;
        ?>
        @foreach($oldOptions as $option)
            <div class="form-group">
                {!! Form::label('option'.$i, 'Option #'.$i, ['class' => 'control-label']) !!}
                {!! Form::text('option'.$i, $option, ['class' => 'form-control ', 'placeholder' => '']) !!}
                @if($errors->has('option'.$i))
                    <span class="help-block">
                        <strong>{{ $errors->first('option'.$i) }}</strong>
                    </span>
                @endif
            </div>
            <?php 
                $i++;
            ?>
        @endforeach
    @endif

    {{-- <div class="form-group">
        {!! Form::label('correct', 'Correct', ['class' => 'control-label']) !!}
        <select class="form-control" id="type" name="quantity">
            <option value="1" {{ $order->quantity == 1 ? 'selected' : '' }}>Option #1</option>
            <option value="2" {{ $order->quantity == 2 ? 'selected' : '' }}>Option #2</option>
            <option value="3" {{ $order->quantity == 3 ? 'selected' : '' }}>Option #3</option>
            <option value="4" {{ $order->quantity == 4 ? 'selected' : '' }}>Option #4</option>
            <option value="5" {{ $order->quantity == 5 ? 'selected' : '' }}>Option #5</option>
        </select>
    </div> --}}
    
    <div class="form-group">
        {!! Form::label('correct', 'Correct', ['class' => 'control-label']) !!}
        {!! Form::select('correct', $correct_options, old('answer_explanation'), ['class' => 'form-control']) !!}
        @if($errors->has('correct'))
            <span class="help-block">
                <strong>{{ $errors->first('correct') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {!! Form::label('answer_explanation', 'Answer explanation*', ['class' => 'control-label']) !!}
        {!! Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']) !!}
        @if($errors->has('answer_explanation'))
            <span class="help-block">
                <strong>{{ $errors->first('answer_explanation') }}</strong>
            </span>
        @endif
    </div>
</div>