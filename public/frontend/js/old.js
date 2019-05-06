
$(function(){

	var flag = 0;

	$("button.plus").click(function() {
		
		var group = (event.target.id).charAt(6);

		$('.hide').show();

		switch(group)
		{
			case 'a':
				
				if( $(this).html() == "1st" ){
					
					$("#first-a").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

					var div = "<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>";
					
					//When 1st is removed. Remove 2nd also and append 2nd  

					if( $("#first-b").html() != div ){

						var newFirst = $("#first-b").html();

						$("#first-a").html(newFirst);

						$("#first-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
					}

				}else if( $(this).html() == "2nd" ){

					$("#first-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
				}

				break;

			case 'b':
				
				if( $(this).html() == "1st" ){
					
					$("#second-a").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

					var div = "<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>";
					
					//When 1st is removed. Remove 2nd also and append 2nd  

					if( $("#second-b").html() != div ){

						var newFirst = $("#second-b").html();

						$("#second-a").html(newFirst);

						$("#second-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
					}

				}else if( $(this).html() == "2nd" ){

					$("#second-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
				}

				break;

			case 'c':
				
				if( $(this).html() == "1st" ){
					
					$("#third-a").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

					var div = "<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>";
					
					//When 1st is removed. Remove 2nd also and append 2nd  

					if( $("#third-b").html() != div ){

						var newFirst = $("#third-b").html();

						$("#third-a").html(newFirst);

						$("#third-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
					}

				}else if( $(this).html() == "2nd" ){

					$("#third-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
				}

				break;

			case 'd':
				
				if( $(this).html() == "1st" ){
					
					$("#fourth-a").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

					var div = "<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>";
					
					//When 1st is removed. Remove 2nd also and append 2nd  

					if( $("#fourth-b").html() != div ){

						var newFirst = $("#fourth-b").html();

						$("#fourth-a").html(newFirst);

						$("#fourth-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
					}

				}else if( $(this).html() == "2nd" ){

					$("#fourth-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
				}

				break;

			case 'e':
				
				if( $(this).html() == "1st" ){

					console.log('fas');
					
					$("#fifth-a").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

					var div = "<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>";
					
					//When 1st is removed. Remove 2nd also and append 2nd  

					if( $("#fifth-b").html() != div ){

						console.log('first');

						var newFirst = $("#first-b").html();

						$("#fifth-a").html(newFirst);

						$("#fifth-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
					}

				}else if( $(this).html() == "2nd" ){

					console.log('gaasdf');

					$("#fifth-b").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");
				}

				break;


		}

		window.target = (event.target.id);

		window.text = target.substr(0, 7);

		// console.log(text);

		window.placeText = $('#'+text).text();

		firstChanges();


		switch(group)
		{

			case 'a':
				
				if($(this).html() == "1st"){

					$("#first-a").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#first-a').find('button').html('+');

					$('#first-a').find('button').attr('id','group-a-first');

					$('#first-a').find('button').removeClass('plus').addClass('plus-16');


				}else if( $(this).html() == "2nd" ){

					$("#first-b").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#first-b').find('button').html('+');

					$('#first-b').find('button').attr('id','group-b-first');

					$('#first-b').find('button').removeClass('plus').addClass('plus-16');

				}

				break;

			case 'b':

				if($(this).html() == "1st"){
					
					$("#second-a").html("<li>"+$(this).parents("li").html()+"</li>");
					$('#second-a').find('button').html('+');

					$('#second-a').find('button').attr('id','group-a-second');

					$('#second-a').find('button').removeClass('plus').addClass('plus-16');

				}else if( $(this).html() == "2nd" ){

					$("#second-b").html("<li>"+$(this).parents("li").html()+"</li>");
					$('#second-b').find('button').html('+');

					$('#second-b').find('button').attr('id','group-b-second');

					$('#second-b').find('button').removeClass('plus').addClass('plus-16');

				}
				break;

			case 'c':

				if($(this).html() == "1st"){
					
					$("#third-a").html("<li>"+$(this).parents("li").html()+"</li>");
					$('#third-a').find('button').html('+');

					$('#third-a').find('button').attr('id','group-c-first');

					$('#third-a').find('button').removeClass('plus').addClass('plus-16');

				}else if( $(this).html() == "2nd" ){

					$("#third-b").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#third-b').find('button').html('+');

					$('#third-b').find('button').attr('id','group-d-first');

					$('#third-b').find('button').removeClass('plus').addClass('plus-16');
				}
				break;

			case 'd':

				if($(this).html() == "1st"){
					
					$("#fourth-a").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#fourth-a').find('button').html('+');

					$('#fourth-a').find('button').attr('id','group-c-second');

					$('#fourth-a').find('button').removeClass('plus').addClass('plus-16');

				}else if( $(this).html() == "2nd" ){

					$("#fourth-b").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#fourth-b').find('button').html('+');

					$('#fourth-b').find('button').attr('id','group-d-second');

					$('#fourth-b').find('button').removeClass('plus').addClass('plus-16');

				}
				break;

			case 'e':

				// console.log('e-first');
	
				if( $(this).html() == "1st"){

					$("#fifth-a").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#fifth-a').find('button').html('+');

					$('#fifth-a').find('button').attr('id','group-e-first');

					$('#fifth-a').find('button').removeClass('plus').addClass('plus-16');

					// console.log('fafdsa');

				}else if( $(this).html() == "2nd" ){

					$("#fifth-b").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#fifth-b').find('button').html('+');

					$('#fifth-b').find('button').attr('id','group-f-first');

					$('#fifth-b').find('button').removeClass('plus').addClass('plus-16');

				}

				break;

			case 'f':

				if($(this).html() == "1st"){
					
					$("#sixth-a").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#sixth-a').find('button').html('+');

					$('#sixth-a').find('button').attr('id','group-e-second');

					$('#sixth-a').find('button').removeClass('plus').addClass('plus-16');


				}else if( $(this).html() == "2nd" ){

					$("#sixth-b").html("<li>"+$(this).parents("li").html()+"</li>");
					$('#sixth-b').find('button').html('+');

					$('#sixth-b').find('button').attr('id','group-f-second');

					$('#sixth-b').find('button').removeClass('plus').addClass('plus-16');

				}
				break;

			case 'g':
	
				if($(this).html() == "1st"){

					// console.log('fasd');

					$("#seventh-a").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#seventh-a').find('button').html('+');

					$('#seventh-a').find('button').attr('id','group-g-first');

					$('#seventh-a').find('button').removeClass('plus').addClass('plus-16');


				}else if( $(this).html() == "2nd" ){

					// console.log('fasfd');

					$("#seventh-b").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#seventh-b').find('button').html('+');

					$('#seventh-b').find('button').attr('id','group-h-first');

					$('#seventh-b').find('button').removeClass('plus').addClass('plus-16');

				}

				break;

			case 'h':

				if($(this).html() == "1st"){
					
					$("#eighth-a").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#eighth-a').find('button').html('+');

					$('#eighth-a').find('button').attr('id','group-g-second');

					$('#eighth-a').find('button').removeClass('plus').addClass('plus-16');


				}else if( $(this).html() == "2nd" ){

					$("#eighth-b").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#eighth-b').find('button').html('+');

					$('#eighth-b').find('button').attr('id','group-h-second');

					$('#eighth-b').find('button').removeClass('plus').addClass('plus-16');

				}
				break;

		}

		
	});
	

	function firstChanges(){

		if( $('#'+target).text() == "+" && placeText == "Select 1st place" ){

			$('#'+target).text('1st');

			$('#'+text).text('Select 2nd place');

		}else if( $('#'+target).text() == "1st" && placeText == "Select 2nd place" ){

			$('#'+target).text('+');

			$('#'+text).text('Select 1st place');

		}else if( $('#'+target).text() == "2nd" && placeText == "Done" ){

			$('#'+target).text('+');

			$('#'+text).text('Select 2nd place');

			change();

		}else if( $('#'+target).text() == "1st" && placeText == "Done" || $('#'+target).text() == "2nd" && placeText == "Done" ){

			change();

		}else if( $('#'+target).text() == "+" && placeText == "Select 2nd place" ){

			check();

		}else{

			complete();

		}
	}


	function check(){

		var target = (event.target.id);

		var place = target.substr(0, 8);

		var text = target.substr(0, 7);

		var placeText = $('#'+text).text();

		for( i = 4; i >= 1; i-- ){

			if(  $('#'+place+i).text() == "1st" && placeText == "Select 2nd place" ){

				$('#'+target).text('2nd');

				flag = 1;

				$('#'+text).text('Done');

				for( j=4; j >= 1; j-- ){

					if( $('#'+place+j).text() == "+"  ){

						$('#'+place+j).text('out');

					}

				}

			}

		}

	}

	function change(){

		var target = (event.target.id);

		$('#'+target).text('+');

		var place = target.substr(0, 8);

		var text = target.substr(0, 7);

		var placeText = $('#'+text).text();

		for( i = 4; i >= 1; i-- ){

			var va = $('#'+place+i);

			if( va.text() == '2nd' ){

				$('#'+place+i).text("1st");

				$('#'+text).text('Select 2nd place');

				flag = 0;
			
			}else if( va.text() == 'out' ){

				$('#'+place+i).text("+");

				flag = 0;
			
			}

		}

	}  	

	if( flag == 1 ){

		complete();

	}

	function complete(){

		event.preventDefault();

		var target = (event.target.id);

		var place = target.substr(0, 8);

		var placeText = $('#'+text).text();

		for( i = 4; i >= 1; i-- ){

			if(  $('#'+place+i).text() == "1st" && placeText == "Done" ){

				for( j=4; j >= 1; j-- ){

					if( $('#'+place+j).text() == "2nd" && placeText == "Done" ){

						var group = place.substr(0, 7);

						var first = i;

						var second = j;

						var data = [];

						data = [ group, first , second];

						// var url = 'fetch-details';

						// $.ajax({
	     //                    data: {
	     //                        "_token": "{{ csrf_token() }}",
	     //                        "data": data,
	     //                    },
	     //                    type:'POST',
	     //                    url: url,
	     //                    success:function(response){
	     //                        console.log(response);
	     //                    }
	     //                });

						
					}

				}

			}

		}

	}

	$('body').on('click','.plus-16', function(){
	
		window.target = (event.target.id);

		window.text = target.substr(0, 14);

		window.group = target.charAt(6);


		if($(this).html() != 'Win'){

			switch(group){

				case 'a':

					if(text == 'group-a-first'){

						$(this).html('Win');	

						$("#quarter-a-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-a-second').html('Out');

						$('#quarter-a-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-a-first').find('button').attr('id','quarter-a-first');

						$('#quarter-a-first').find('button').html("+");


					}else if( text == 'group-a-second'){

						$(this).html('Win');

						$("#quarter-a-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-a-first').html('Out');

						$('#quarter-a-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-a-first').find('button').attr('id','quarter-a-first');

						$('#quarter-a-first').find('button').html("+");

					}

					break;

				case 'b':

					if(text == 'group-b-first'){

						$(this).html('Win');

						$("#quarter-a-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-b-second').html('Out');

						$('#quarter-a-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-a-second').find('button').attr('id','quarter-a-second');

						$('#quarter-a-second').find('button').html("+");


					}else if( text == 'group-b-second'){

						$(this).html('Win');

						$("#quarter-a-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-b-first').html('Out');

						$('#quarter-a-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-a-second').find('button').attr('id','quarter-a-first');

						$('#quarter-a-second').find('button').html("+");

					}

					break;

				case 'c':

					if( text ==  'group-c-first'){

						$(this).html('Win');

						$("#quarter-b-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-c-second').html('Out');

						$('#quarter-b-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-b-first').find('button').attr('id','quarter-b-first');

						$('#quarter-b-first').find('button').html("+");


					}else if( text ==  'group-c-second'){

						$(this).html('Win');

						$("#quarter-b-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-c-first').html('Out');

						$('#quarter-b-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-b-first').find('button').attr('id','quarter-b-first');						

						$('#quarter-b-first').find('button').html("+");

					}

					break;


				case 'd':

					if( text ==  'group-d-first'){

						$(this).html('Win');

						$("#quarter-b-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-d-second').html('Out');

						$('#quarter-b-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-b-second').find('button').attr('id','quarter-b-second');

						$('#quarter-b-second').find('button').html("+");


					}else if( group == 'd' && text ==  'group-d-second'){

						$(this).html('Win');

						$("#quarter-b-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-d-first').html('Out');

						$('#quarter-b-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-b-second').find('button').attr('id','quarter-b-second');

						$('#quarter-b-second').find('button').html("+");

					}

					break;

				case 'e':

				// console.log('group-e');

					if(text == 'group-e-first'){

						// console.log('first');

						$(this).html('Win');	

						$("#quarter-c-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-e-second').html('Out');

						$('#quarter-c-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-c-first').find('button').attr('id','quarter-c-first');

						$('#quarter-c-first').find('button').html("+");


					}else if( text == 'group-e-second'){

						// console.log('second');

						$(this).html('Win');

						$("#quarter-c-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-e-first').html('Out');

						$('#quarter-c-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-c-first').find('button').attr('id','quarter-c-first');

						$('#quarter-c-first').find('button').html("+");

					}

					break;

				case 'f':

					if( text ==  'group-f-first'){

						// console.log('fads');

						$(this).html('Win');

						$("#quarter-c-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-f-second').html('Out');

						$('#quarter-c-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-c-second').find('button').attr('id','quarter-c-second');

						$('#quarter-c-second').find('button').html("+");


					}else if( group == 'f' && text ==  'group-f-second'){

						$(this).html('Win');

						$("#quarter-c-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-f-first').html('Out');

						$('#quarter-c-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-c-second').find('button').attr('id','quarter-c-second');

						$('#quarter-c-second').find('button').html("+");


					}

					break;


				case 'g':

					if( text ==  'group-g-first'){

						// console.log('g');

						$(this).html('Win');

						$("#quarter-d-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-g-second').html('Out');

						// console.log($('#quarter-d-second').find('button'));


						$('#quarter-d-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-d-first').find('button').attr('id','quarter-d-first');

						$('#quarter-d-first').find('button').html("+");


					}else if( group == 'g' && text ==  'group-g-second'){

						// console.log('fasdf');

						$(this).html('Win');

						$("#quarter-d-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-g-first').html('Out');

						$('#quarter-d-first').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-d-first').find('button').attr('id','quarter-d-first');

						$('#quarter-d-first').find('button').html("+");

					}

					break;

				case 'h':

					if( text ==  'group-h-first'){

						// console.log('fads');

						$(this).html('Win');

						$("#quarter-d-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-h-second').html('Out');

						$('#quarter-d-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-d-second').find('button').attr('id','quarter-d-second');

						$('#quarter-d-second').find('button').html("+");


					}else if( group == 'h' && text ==  'group-h-second'){

						$(this).html('Win');

						$("#quarter-d-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#group-h-first').html('Out');

						$('#quarter-d-second').find('button').removeClass('plus-16').addClass('quarter');

						$('#quarter-d-second').find('button').attr('id','quarter-d-second');

						$('#quarter-d-second').find('button').html("+");

					}

					break;


			}

		

		}else{


			switch(group){

				case 'a':

					if( $(this).html() == 'Win' && text == 'group-a-first' ){

						$("#quarter-a-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$(this).html('+');

						$('#group-a-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-a-second'){

						$(this).html('+');

						$("#quarter-a-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-a-first').html('+');

					}

					break;

				case 'b':

					if( $(this).html() == 'Win' && text == 'group-b-first' ){

						$(this).html('+');

						$("#quarter-a-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-b-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-b-second'){

						$(this).html('+');

						$("#quarter-a-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-b-first').html('+');

					}

					break;

				case 'c':

					if( $(this).html() == 'Win' && text == 'group-c-first' ){

						$(this).html('+');

						$("#quarter-b-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-c-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-c-second'){

						$(this).html('+');

						$("#quarter-b-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-c-first').html('+');

					}

					break;

				case 'd':

					if( $(this).html() == 'Win' && text == 'group-d-first' ){

						$(this).html('+');

						$("#quarter-b-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-d-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-d-second'){

						$(this).html('+');

						$("#quarter-b-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-d-first').html('+');

					}

					break;

				case 'e':

					if( $(this).html() == 'Win' && text == 'group-e-first' ){

						// console.log('e');

						$("#quarter-c-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$(this).html('+');

						$('#group-e-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-e-second'){

						$(this).html('+');

						$("#quarter-c-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-e-first').html('+');

					}

					break;

				case 'f':

					if( $(this).html() == 'Win' && text == 'group-f-first' ){

						$(this).html('+');

						$("#quarter-c-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-f-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-f-second'){

						$(this).html('+');

						$("#quarter-c-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-f-first').html('+');

					}

					break;

				case 'g':

					if( $(this).html() == 'Win' && text == 'group-g-first' ){

						// console.log('e');

						$("#quarter-d-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$(this).html('+');

						$('#group-g-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-g-second'){

						$(this).html('+');

						$("#quarter-d-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-g-first').html('+');

					}

					break;

				case 'h':

					if( $(this).html() == 'Win' && text == 'group-h-first' ){

						$(this).html('+');

						$("#quarter-d-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-h-second').html('+');

					}else if( $(this).html() == 'Win' && text == 'group-h-second'){

						$(this).html('+');

						$("#quarter-d-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#group-h-first').html('+');

					}

					break;

			}


		}



	});

	
	$('body').on('click','.quarter', function(){

		// console.log($(this));

		window.target = (event.target.id);

		window.text = target.substr(0, 15);

		// console.log(text);

		window.group = target.charAt(8);

		// console.log($(this).parents());


		if($(this).html() != 'Win'){

			switch(group){

				case 'a':

					if(text == 'quarter-a-first'){

						// console.log('fasd');

						$(this).html('Win');	

						$("#semi-a-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-a-second').find('button').html('Out');

						$('#semi-a-first').find('button').html("+");

						$('#semi-a-first').find('button').attr('id','semi-a-first');

						$('#semi-a-first').find('button').removeClass('quarter').addClass('semi');


					}else if( text == 'quarter-a-secon'){

						$(this).html('Win');

						$("#semi-a-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-a-first').find('button').html('Out');

						$('#semi-a-first').find('button').attr('id','semi-a-first');

						$('#semi-a-first').find('button').removeClass('quarter').addClass('semi');

						$('#semi-a-first').find('button').html("+");


					}

					break;

				case 'b':

					if(text == 'quarter-b-first'){

						// console.log('b');

						$(this).html('Win');	

						$("#semi-a-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-b-second').find('button').html('Out');

						$('#semi-a-second').find('button').attr('id','semi-a-second');

						$('#semi-a-second').find('button').removeClass('quarter').addClass('semi');

						$('#semi-a-second').find('button').html("+");

					}else if( text == 'quarter-b-secon'){

						// console.log('b-sec');

						$(this).html('Win');

						$("#semi-a-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-b-first').find('button').html('Out');

						$('#semi-a-second').find('button').attr('id','semi-a-second');

						$('#semi-a-second').find('button').removeClass('quarter').addClass('semi');

						$('#semi-a-second').find('button').html("+");

					}

					break;

				case 'c':

					if(text == 'quarter-c-first'){

						$(this).html('Win');	

						// console.log('quarter-c-3');

						$("#semi-b-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-c-second').find('button').html('Out');

						$('#semi-b-first').find('button').attr('id','semi-b-first');

						$('#semi-b-first').find('button').removeClass('quarter').addClass('semi');

						$('#semi-b-first').find('button').html("+");


					}else if( text == 'quarter-c-secon'){

						// console.log('quarter-c');

						$(this).html('Win');

						$("#semi-b-first").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-c-first').find('button').html('Out');

						$('#semi-b-first').find('button').attr('id','semi-b-first');

						$('#semi-b-first').find('button').removeClass('quarter').addClass('semi');

						$('#semi-b-first').find('button').html("+");


					}

					break;

				case 'd':

					if(text == 'quarter-d-first'){

						// console.log('fasd');

						$(this).html('Win');	

						$("#semi-b-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-d-second').find('button').html('Out');

						$('#semi-b-second').find('button').attr('id','semi-b-second');

						$('#semi-b-second').find('button').removeClass('quarter').addClass('semi');

						$('#semi-b-second').find('button').html("+");


					}else if( text == 'quarter-d-secon'){

						$(this).html('Win');

						$("#semi-b-second").html("<li>"+$(this).parents("li").html()+"</li>");

						$('#quarter-d-first').find('button').html('Out');

						$('#semi-b-second').find('button').attr('id','semi-b-second');

						$('#semi-b-second').find('button').removeClass('quarter').addClass('semi');

						$('#semi-b-second').find('button').html("+");

					}

					break;

				}
			}else{

				switch(group){

				case 'a':

					if( $(this).html() == 'Win' && text == 'quarter-a-first' ){

						$("#semi-a-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$(this).html('+');

						$('#quarter-a-second').find('button').html('+');


					}else if( $(this).html() == 'Win' && text == 'quarter-a-secon'){

						// console.log('true');

						$(this).html('+');

						$("#semi-a-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#quarter-a-first').find('button').html('+');

					}

					break;

				case 'b':

					if( $(this).html() == 'Win' && text == 'quarter-b-first' ){

						$("#semi-a-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$(this).html('+');

						$('#quarter-b-second').find('button').html('+');


					}else if( $(this).html() == 'Win' && text == 'quarter-b-secon'){

						// console.log('true');

						$(this).html('+');

						$("#semi-a-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#quarter-b-first').find('button').html('+');

					}

					break;

				case 'c':

					// console.log('fasd');

					if( $(this).html() == 'Win' && text == 'quarter-c-first' ){

						$("#semi-b-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$(this).html('+');

						$('#quarter-c-second').find('button').html('+');


					}else if( $(this).html() == 'Win' && text == 'quarter-c-secon'){

						// console.log('true');

						$(this).html('+');

						$("#semi-b-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#quarter-c-first').find('button').html('+');

					}

					break;

				case 'd':

					if( $(this).html() == 'Win' && text == 'quarter-d-first' ){

						$("#semi-b-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$(this).html('+');

						$('#quarter-d-second').find('button').html('+');


					}else if( $(this).html() == 'Win' && text == 'quarter-d-secon'){

						// console.log('true');

						$(this).html('+');

						$("#semi-b-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

						$('#quarter-d-first').find('button').html('+');

					}

					break;

			}


		}

		
	});


	$('body').on('click','.semi', function(e){

			e.stopPropagation();

			window.target = (event.target.id);

			window.text = target.substr(0, 12);

			// console.log(target);

			window.group = target.charAt(5);

			if($(this).html() != 'Win'){

				switch(group){

					case 'a':

						if( text == 'semi-a-first' ){

							$(this).html('Win');

							$('#finals-a-first').html("<li>"+$(this).parents("li").html()+"</li>");

							$('#semi-a-second').find('button').html('Out');

							$('#finals-a-first').find('button').html("+");

							$('#finals-a-first').find('button').attr('id','finals-a-first');

							$('#finals-a-first').find('button').removeClass('semi').addClass('final');


						}else if( text == 'semi-a-secon'){

							$(this).html('Win');

							$("#finals-a-first").html("<li>"+$(this).parents("li").html()+"</li>");

							$('#semi-a-first').find('button').html('Out');

							$('#finals-a-first').find('button').html("+");

							$('#finals-a-first').find('button').attr('id','finals-a-first');

							$('#finals-a-first').find('button').removeClass('semi').addClass('final');


						}

					break;

				case 'b':

						if( text == 'semi-b-first' ){

							// console.log('fasd');

							$(this).html('Win');

							$('#finals-a-second').html("<li>"+$(this).parents("li").html()+"</li>");

							$('#semi-b-second').find('button').html('Out');

							$('#finals-a-second').find('button').html("+");

							$('#finals-a-second').find('button').attr('id','finals-a-second');

							$('#finals-a-second').find('button').removeClass('semi').addClass('final');


						}else if( text == 'semi-b-secon'){

							// console.log('fasdf');

							$(this).html('Win');

							$("#finals-a-second").html("<li>"+$(this).parents("li").html()+"</li>");

							$('#semi-b-first').find('button').html('Out');

							$('#finals-a-second').find('button').html("+");

							$('#finals-a-second').find('button').attr('id','finals-a-second');

							$('#finals-a-second').find('button').removeClass('semi').addClass('final');


						}

					break;
					
				}
			
			}else{

				switch(group){

					case 'a':

						if( $(this).html() == 'Win' && text == 'semi-a-first' ){

							// console.log('fasf');

							$("#finals-a-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

							$(this).html('+');

							$('#semi-a-second').find('button').html('+');


						}else if( $(this).html() == 'Win' && text == 'semi-a-secon'){

							// console.log('true');

							$(this).html('+');

							$("#finals-a-first").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

							$('#semi-a-first').find('button').html('+');

						}

						break;

					case 'b':

						if( $(this).html() == 'Win' && text == 'semi-b-first' ){

							// console.log('fasf');

							$("#finals-a-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

							$(this).html('+');

							$('#semi-b-second').find('button').html('+');


						}else if( $(this).html() == 'Win' && text == 'semi-b-secon'){

							// console.log('true');

							$(this).html('+');

							$("#finals-a-second").html("<li> <img class='image' src='image/flags/sg6b4E_1526282342.download.png' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

							$('#semi-b-first').find('button').html('+');

						}

						break;


				}
			}


	});


	$('body').on('click','.final', function(){

		window.target = (event.target.id);

		if(target == 'finals-a-first'){

			$(this).html('Win');

			$('#name').text($(this).parents('span').children('p').html());

			$('#winner').html($(this).parents("li").children('img').clone());

			var text = $(this).parents('span').children('p').html();

			$('#winner').append("<span><p>"+text+"</p></span>");

			$('#finals-a-second').find('button').html('Out');

		}else{

			$(this).html('Win');

			$('#name').text($(this).parents('span').children('p').html());

			var text = $(this).parents('span').children('p').html();

			$('#winner').html($(this).parents("li").children('img').clone());

			$('#winner').append("<span><p class='name'>"+text+"</p></span>");

			$('#finals-a-first').find('button').html('Out');

		}
		

	});


	$('body').on('click','.save', function(e){

		e.preventDefault();

		// Round 16

		var groupAFirst = $('#group-a-first').parents('li').find('p').html();
		var groupASecond = $('#group-a-second').parents('li').find('p').html();

		var groupBFirst = $('#group-b-first').parents('li').find('p').html();
		var groupBSecond = $('#group-b-second').parents('li').find('p').html();

		var groupCFirst = $('#group-c-first').parents('li').find('p').html();
		var groupCSecond = $('#group-c-second').parents('li').find('p').html();

		var groupDFirst = $('#group-d-first').parents('li').find('p').html();
		var groupDSecond = $('#group-d-second').parents('li').find('p').html();

		var groupEFirst = $('#group-e-first').parents('li').find('p').html();
		var groupESecond = $('#group-e-second').parents('li').find('p').html();

		var groupFFirst = $('#group-f-first').parents('li').find('p').html();
		var groupFSecond = $('#group-f-second').parents('li').find('p').html();

		var groupGFirst = $('#group-g-first').parents('li').find('p').html();
		var groupGSecond = $('#group-g-second').parents('li').find('p').html();

		var groupHFirst = $('#group-h-first').parents('li').find('p').html();
		var groupHSecond = $('#group-h-second').parents('li').find('p').html();

		// quarter-finals

		var quarterAFirst = $('#quarter-a-first').children("li").find('p').html();
		var quarterASecond = $('#quarter-a-second').children("li").find('p').html();

		var quarterBFirst = $('#quarter-b-first').children("li").find('p').html();
		var quarterBSecond = $('#quarter-b-second').children("li").find('p').html();

		var quarterCFirst = $('#quarter-c-first').children("li").find('p').html();
		var quarterCSecond = $('#quarter-c-second').children("li").find('p').html();

		var quarterDFirst = $('#quarter-d-first').children("li").find('p').html();
		var quarterDSecond = $('#quarter-d-second').children("li").find('p').html();

		//semi-finals

		var semiAFirst = $('#semi-a-first').children("li").find('p').html();
		var semiASecond = $('#semi-a-second').children("li").find('p').html();

		var semiBFirst = $('#semi-b-first').children("li").find('p').html();
		var semiBSecond = $('#semi-b-second').children("li").find('p').html();

		//Finals

		var finalsAFirst =  $('#finals-a-first').children("li").find('p').html();
		var finalsASecond =  $('#finals-a-second').children("li").find('p').html();

		var userId = $('#userId').val();

		console.log(userId);

		// Winner 

		var winner = $('#winner').children('span').find('p').html();


		group16 = [ groupAFirst, groupASecond, groupBFirst, groupBSecond, groupCFirst, groupCSecond, groupDFirst, groupDSecond, groupEFirst, groupESecond, groupFFirst, groupFSecond, groupGFirst, groupGSecond, groupHFirst, groupHSecond];

		quarterFinals = [ quarterAFirst, quarterASecond, quarterBFirst, quarterBSecond, quarterCFirst, quarterCSecond, quarterDFirst, quarterDSecond ];

		semiFinals = [ semiAFirst, semiASecond, semiBFirst, semiBSecond ];

		finals = [finalsAFirst, finalsASecond];	

		data = [ userId, group16, quarterFinals, semiFinals, finals, winner];

		console.log(data);

		var url = 'fetch-details';

		$.ajax({
            data: {
                "_token": "{{ csrf_token() }}",
                "data": data,
            },
            type:'POST',
            url: url,
            success:function(response){
            	alert('You have predicted successfully');
                console.log(response);
            }
        });

	
	});	

	
	
});



