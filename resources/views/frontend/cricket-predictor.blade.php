<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Worlcup Predictor</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<style>
		.title{
			text-align:right;
		}
		.profile{
			padding: 10px;
		}
	</style>

	<script src="{{ asset('backend/js/jquery.min.js') }}"></script>

	<script>
		var popupSize = {
		    width: 780,
		    height: 550
		};

		$(document).on('click', '.social-button', function (e) {

		    var verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
		        horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

		    var popup = window.open($(this).prop('href'), 'social',
		        'width=' + popupSize.width + ',height=' + popupSize.height +
		        ',left=' + verticalPos + ',top=' + horisontalPos +
		        ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

		    if (popup) {

		        popup.focus();

		        e.preventDefault();

		    }

		});
	</script>
	
</head>

<body>

	<!-- worldcup user infor -->
	<div class="wrapper group-stage">
		
		<p class="heading">Group Stage</p>
	
		<div class="group grp-a">
			
			<h4>Group A</h4>

			<div class="new" id="new"></div>

			<h6 id="group-a">Select 1st place</h6>

			<div class="first-panel">
			
				<ul class="matches">
					<?php 
						$i = 0;
					?>
					@foreach( $groupAs as $groupA )

						<li>						
							<img class="image" src="{{ asset($groupA->flag_image) }}" alt="" width="80px" height="60px">
							<span>
								<p>{{ $groupA->name }}</p>
							</span>
							<button class="plus" id="group-a-<?php echo ++$i; ?>">+</button>
						</li>
						
					@endforeach

				</ul>
					
			</div>
		</div>

		<div class="group grp-b">

			<h4>Group B</h4>

			<h6 id="group-b">Select 1st place</h6>

			<div class="second-panel">

				<ul class="matches">
					<?php 
						$i = 0;
					?>
					@foreach( $groupBs as $groupB )

						<li>						
							<img src="{{ asset($groupB->flag_image) }}" alt="" width="80px" height="60px">
							<span>
								<p>{{ $groupB->name }}</p>
								<button class="plus" id="group-b-<?php echo ++$i; ?>">+</button>
							</span>
						</li>
						
					@endforeach

				</ul>
				
			</div>
		</div>

	</div>

	<div class="wrapper semi-finals">
			
		<p class="heading">Semi Finals</p>

		<div class="small-group semi">

			<div class="block semi">

				<div class="image">
					<img src="{{ asset('frontend/images/t.png') }}" alt="" width="150px" height="150px">
				</div>

				<div class="left-part" id="semi-a-first">
					<img src="" alt="" width="80px" height="60px">

					<span>
						<!-- <p>Russia</p> -->
						<!-- <button class="semi" id="group-16-first">+</button> -->
					</span>
				</div>		

				<div class="right-part" id="semi-a-second">
					<img src="" alt="" width="80px" height="60px">

					<span>
						<!-- <p>Russia</p> -->
						<!-- <button class="semi" id="group-16-second">+</button> -->
					</span>
				</div>

			</div>
			
		</div>

		<div class="small-group semi">

			<div class="block semi">

				<div class="image">
					<img src="{{ asset('frontend/images/t.png') }}" alt="" width="150px" height="150px">
				</div>

				<div class="left-part" id="semi-b-first">
					<img src="" alt="" width="80px" height="60px">

					<span>
						<!-- <p>Russia</p>
						<button class="semi" id="semi-b-first">+</button> -->
					</span>
				</div>		

				<div class="right-part" id="semi-b-second">
					<img src="" alt="" width="80px" height="60px">

					<span>
						<!-- <p>Russia</p> -->
						<!-- <button class="semi" id="semi-b-first">+</button> -->
					</span>
				</div>

			</div>
			
		</div>

	</div>


	<div class="wrapper finals">
			
		<p class="heading">Finals</p>

		<div class="small-group finals">

			<div class="block finals">

				<div class="image">
					<img src="{{ asset('frontend/images/t.png') }}" alt="" width="150px" height="150px">
				</div>

				<div class="left-part" id="finals-a-first">
					<img src="" alt="" width="80px" height="60px">

					<span>
						<!-- <p>Russia</p>
						<button class="final" id="">+</button> -->
					</span>
				</div>		

				<div class="right-part" id="finals-a-second">
					<img src="" alt="" width="80px" height="60px">

					<span>
						<!-- <p>Russia</p>
						<button class="final" id="">+</button> -->
					</span>
				</div>

			</div>
			
		</div>

	</div>


	<div class="wrapper winner">
			
		<p class="heading">Winner</p>

		<div class="winner" id="winner" style="text-align: center;">

			<img src="" alt="" width="100px" height="100px"> 

			<p class='name' id="winner-name"></p>
			
		</div>		

	</div>

	<div class="submit-block">
		<button class="save" id="saveGame">SAVE YOUR PREDICTION</button>
	</div>

	<div id="social-links" class="social-links">
		<ul>
			<li><a href="https://www.facebook.com/sharer/sharer.php?" class="social-button " id=""><span class="fa fa-facebook-official"></span>Share on Facebook</i></a></li>
			<li><a href="https://twitter.com/intent/tweet?" class="social-button " id=""><span class="fa fa-twitter">Share on Twitter</span></a></li>
			<li><a href="https://plus.google.com/share?" class="social-button " id=""><span class="fa fa-google-plus"></span>Share on Google</a></li>
		</ul>
	</div>

	<style>
		button#saveGame {
		    background: green;
		    width: auto;
		    height: auto;
		    border-radius: 0;
		    padding: 15px 35px;
		    color: #ffffff;
		    margin: 20px 0;
		}
	</style>

	<script src="{{ asset('frontend/js/cric.js') }}"></script>

	<script>

	    var popupSize = {
	        width: 780,
	        height: 550
	    };

	    $(document).on('click', '.social-buttons > a', function(e){

	        var
	            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
	            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

	        var popup = window.open($(this).prop('href'), 'social',
	            'width='+popupSize.width+',height='+popupSize.height+
	            ',left='+verticalPos+',top='+horisontalPos+
	            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

	        if (popup) {
	            popup.focus();
	            e.preventDefault();
	        }

	    });

	</script>

</body>
</html>