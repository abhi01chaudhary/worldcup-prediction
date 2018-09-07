(function(){

	var flag = 0;

	$("button.plus").click(function() {

		if($(this).parents("li").find('button').html() == '+'){

			$("#first").append("<li>"+$(this).parents("li").html()+"</li>");
			
		}

		var target = (event.target.id);

		var text = target.substr(0, 7);

		var placeText = $('#'+text).text();

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

	});

})();

