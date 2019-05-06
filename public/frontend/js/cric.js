
$(function(){

	var flag = 0;

	$("button.plus").click(function() {

        // console.log(event.target.id);
		var group = (event.target.id).charAt(6);
		$('.hide').show();

		switch(group)
		{
			case 'a':
				
				if( $(this).html() == "1st" ){
					
					$("#semi-a-first").html("<li> <img class='image' src='' alt='' width='60px' height='60px'></li>");

					var div = "<li> <img class='image' src='' alt='' width='60px' height='60px'></li>";
					
					// console.log(div);
					//When 1st is removed. Remove 2nd also and append 2nd  

                    if( $("#semi-b-second").html() != div ){

                        var newFirst = $("#semi-a-second").html();

                        $("#semi-a-first").html(newFirst);

                        $("#semi-a-second").html("<li> <img class='image' src='' alt='' width='60px' height='60px'></li>");
                    }

				}else if( $(this).html() == "2nd" ){

					$("#semi-a-second").html("<li> <img class='image' src='' alt='' width='60px' height='60px'></li>");
				}

				break;

			case 'b':
				
				if( $(this).html() == "1st" ){
					
					$("#semi-b-first").html("<li> <img class='image' src='' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

					var div = "<li> <img class='image' src='' alt='' width='60px' height='60px'><span><pRussia</p></span></li>";
					
					//When 1st is removed. Remove 2nd also and append 2nd  

					if( $("#semi-b-second").html() != div ){

						var newFirst = $("#semi-b-second").html();

						$("#semi-b-first").html(newFirst);

						$("#semi-b-second").html("<li> <img class='image' src='' alt='' width='60px' height='60px'></li>");
					}

				}else if( $(this).html() == "2nd" ){

					$("#semi-b-second").html("<li> <img class='image' src='' alt='' width='60px' height='60px'></li>");
				}

            break;

		}

		window.target = (event.target.id);

		window.text = target.substr(0, 7);

		window.placeText = $('#'+text).text();

        firstChanges();

		switch(group)
		{

			case 'a':
				
				if($(this).html() == "1st"){

					$("#semi-a-first").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#semi-a-first').find('button').html('+');

					$('#semi-a-first').find('button').attr('id','semi-a-first');

					$('#semi-a-first').find('button').removeClass('plus').addClass('semi');

				}else if( $(this).html() == "2nd" ){

					$("#semi-a-second").html("<li>"+$(this).parents("li").html()+"</li>");

					$('#semi-a-second').find('button').html('+');

					$('#semi-a-second').find('button').attr('id','semi-a-second');

					$('#semi-a-second').find('button').removeClass('plus').addClass('semi');

				}

            break;

			case 'b':

				if($(this).html() == "1st"){
					
					$("#semi-b-first").html("<li>"+$(this).parents("li").html()+"</li>");
                    
                    $('#semi-b-first').find('button').html('+');

					$('#semi-b-first').find('button').attr('id','semi-b-first');

					$('#semi-b-first').find('button').removeClass('plus').addClass('semi');

				}else if( $(this).html() == "2nd" ){

					$("#semi-b-second").html("<li>"+$(this).parents("li").html()+"</li>");
                    
                    $('#semi-b-second').find('button').html('+');

					$('#semi-b-second').find('button').attr('id','semi-b-second');

					$('#semi-b-second').find('button').removeClass('plus').addClass('semi');

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

		for( i = 5; i >= 1; i-- ){

			if(  $('#'+place+i).text() == "1st" && placeText == "Select 2nd place" ){

				$('#'+target).text('2nd');

				flag = 1;

				$('#'+text).text('Done');

				for( j=5; j >= 1; j-- ){

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
        
        // console.log(place);

		var text = target.substr(0, 7);

		var placeText = $('#'+text).text();

		for( i = 5; i >= 1; i-- ){

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

                        $("#finals-a-first").html("<li> <img class='image' src='' alt='' width='60px' height='60px'></li>");

                        $(this).html('+');

                        $('#semi-a-second').find('button').html('+');


                    }else if( $(this).html() == 'Win' && text == 'semi-a-secon'){

                        // console.log('true');

                        $(this).html('+');

                        $("#finals-a-first").html("<li> <img class='image' src='' alt='' width='60px' height='60px'></li>");

                        $('#semi-a-first').find('button').html('+');

                    }

                break;

                case 'b':

                    if( $(this).html() == 'Win' && text == 'semi-b-first' ){

                        $("#finals-a-second").html("<li> <img class='image' src='' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

                        $(this).html('+');

                        $('#semi-b-second').find('button').html('+');

                    }else if( $(this).html() == 'Win' && text == 'semi-b-secon'){

                        $(this).html('+');

                        $("#finals-a-second").html("<li> <img class='image' src='' alt='' width='60px' height='60px'><span><pRussia</p></span></li>");

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


	// $('body').on('click','.save', function(e){

	// 	e.preventDefault();

	// 	// Round 16

	// 	var groupAFirst = $('#group-a-first').parents('li').find('p').html();
	// 	var groupASecond = $('#group-a-second').parents('li').find('p').html();

	// 	var groupBFirst = $('#group-b-first').parents('li').find('p').html();
	// 	var groupBSecond = $('#group-b-second').parents('li').find('p').html();

	// 	var groupCFirst = $('#group-c-first').parents('li').find('p').html();
	// 	var groupCSecond = $('#group-c-second').parents('li').find('p').html();

	// 	var groupDFirst = $('#group-d-first').parents('li').find('p').html();
	// 	var groupDSecond = $('#group-d-second').parents('li').find('p').html();

	// 	var groupEFirst = $('#group-e-first').parents('li').find('p').html();
	// 	var groupESecond = $('#group-e-second').parents('li').find('p').html();

	// 	var groupFFirst = $('#group-f-first').parents('li').find('p').html();
	// 	var groupFSecond = $('#group-f-second').parents('li').find('p').html();

	// 	var groupGFirst = $('#group-g-first').parents('li').find('p').html();
	// 	var groupGSecond = $('#group-g-second').parents('li').find('p').html();

	// 	var groupHFirst = $('#group-h-first').parents('li').find('p').html();
	// 	var groupHSecond = $('#group-h-second').parents('li').find('p').html();

	// 	// quarter-finals

	// 	var quarterAFirst = $('#quarter-a-first').children("li").find('p').html();
	// 	var quarterASecond = $('#quarter-a-second').children("li").find('p').html();

	// 	var quarterBFirst = $('#quarter-b-first').children("li").find('p').html();
	// 	var quarterBSecond = $('#quarter-b-second').children("li").find('p').html();

	// 	var quarterCFirst = $('#quarter-c-first').children("li").find('p').html();
	// 	var quarterCSecond = $('#quarter-c-second').children("li").find('p').html();

	// 	var quarterDFirst = $('#quarter-d-first').children("li").find('p').html();
	// 	var quarterDSecond = $('#quarter-d-second').children("li").find('p').html();

	// 	//semi-finals

	// 	var semiAFirst = $('#semi-a-first').children("li").find('p').html();
	// 	var semiASecond = $('#semi-a-second').children("li").find('p').html();

	// 	var semiBFirst = $('#semi-b-first').children("li").find('p').html();
	// 	var semiBSecond = $('#semi-b-second').children("li").find('p').html();

	// 	//Finals

	// 	var finalsAFirst =  $('#finals-a-first').children("li").find('p').html();
	// 	var finalsASecond =  $('#finals-a-second').children("li").find('p').html();

	// 	var userId = $('#userId').val();

	// 	console.log(userId);

	// 	// Winner 

	// 	var winner = $('#winner').children('span').find('p').html();

	// 	group16 = [ groupAFirst, groupASecond, groupBFirst, groupBSecond, groupCFirst, groupCSecond, groupDFirst, groupDSecond, groupEFirst, groupESecond, groupFFirst, groupFSecond, groupGFirst, groupGSecond, groupHFirst, groupHSecond];

	// 	quarterFinals = [ quarterAFirst, quarterASecond, quarterBFirst, quarterBSecond, quarterCFirst, quarterCSecond, quarterDFirst, quarterDSecond ];

	// 	semiFinals = [ semiAFirst, semiASecond, semiBFirst, semiBSecond ];

	// 	finals = [finalsAFirst, finalsASecond];	

	// 	data = [ userId, group16, quarterFinals, semiFinals, finals, winner];

	// 	console.log(data);

	// 	var url = 'fetch-details';

	// 	$.ajax({
    //         data: {
    //             "_token": "{{ csrf_token() }}",
    //             "data": data,
    //         },
    //         type:'POST',
    //         url: url,
    //         success:function(response){
    //         	alert('You have predicted successfully');
    //             console.log(response);
    //         }
    //     });

	// });	
	
});



