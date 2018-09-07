<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<title>Profile</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

{{ Html::style('backend/plugins/select2/select2.min.css') }}

{{ Html::style('frontend/css/profile.css') }}

</head>
<body>
	
	<div class="wrapper">

		<button class="logout">Logout</button>

		<div class="profile">

			<div class="profile-image">
				
				<img class="img-circle" src="{{ $user->profile_image }}" alt="">

				<div class="user-details">
					
					<p>{{ $user->first_name }}</p>
					
					@if( $user->email )

						<p>{{ $user->email }}</p>
					
					@endif
					
				</div>

			</div>
			
		</div>

		<div class="fav-teams">

				{{ Form::open([ 'class'=>'form-horizontal','method' => 'post' ]) }}
							
					<div class="form-group">

					    <label for="fav_teams" class="col-sm-5 control-label">Pick Your Favourite Team<span class=help-block" style="color: #b30000">&nbsp;* </span></label>

					    <div class="col-sm-8">

				            {{ Form::select('fav_teams', $teams, null, ['data-placeholder'=>"Select Your Favourite 3 Teams", 'class'=>'form-control','id'=>'select-element','multiple'=>true]) }}

				            @if ($errors->has('fav_teams'))
				                <span class="help-block">
				                    <strong>{{ $errors->first('fav_teams') }}</strong>
				                </span>
				            @endif

					    </div>

					</div>
					
					<div class="save-teams">

						<button class="btn btn-success" id="save" data-url="{{ url('favourite-teams/' . $user->id) }}">SAVE</button>
					
					</div>

				{{ Form::close() }}

				@if( $user->fav_teams != null )
						
					<div class="fav-teams">

						<?php 

							$updatedUser = App\Models\User::where('id', $user->id)->first();

							$data = unserialize( $updatedUser->fav_teams );

							$team1 = App\Models\Country::where('id', $data[0])->first();

							$team2 = App\Models\Country::where('id', $data[1])->first();

							$team3 = App\Models\Country::where('id', $data[2])->first();

						?>
						
						<h3>My Favourite teams</h3>
						<ul>
							<li><p>{{ $team1->name }}</p></li>
							<li><p>{{ $team2->name }}</p></li>
							<li><p>{{ $team3->name }}</p></li>
						</ul>

					</div>

				@endif	

			</div>

	</div>

{{ Html::script('backend/plugins/jQuery/jQuery-2.1.4.min.js') }}

{{ Html::script('backend/plugins/select2/select2.full.min.js') }}

<script>
	
	$('#save').on('click', function(e){
		
		e.preventDefault();

		var url = $('#save').attr('data-url');

		console.log(url);

		var data = $("#select-element").val();

		$.ajax({
			type:"POsT",
			url:url,
			data:{
                "_token": "{{ csrf_token() }}",
                "data": data,
            },
			success: function(response){
				alert(response);
			}	
		});

	});

	

	

	$('#select-element').select2({
		maximumSelectionLength: 3
	});

</script>
		
</body>
</html>