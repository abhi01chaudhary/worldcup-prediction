jQuery( document ).ready( function( $ ) {
    //
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    //profile slug of category to be automatically generated
    $(function () {

        $(document).on('change', '.category_name' ,function (data) {
            var category_name = $(this).val();

            category_name = category_name.replace(/\s+/g, '-').toLowerCase();

            $('.generate_category_slug').val(category_name);

        });

    });

    //time pciker
    // $(document).ready(function () {

    //     $(".datepicker").datepicker({
    //         defaultDate: 'now'
    //     });

    //     $(".timepicker").timepicker({
    //         showInputs: false,
    //     });

    //     $('.timepicker').val('');

    // });

    // user edit modal popup - BLOCK
    (function(){

        var url;

        // Create course form submission
        $( document ).on('click' , '.user-list .edit-user-form' , function(e){

            url = $(this).attr('data-url')

            //console.log(url);

            $('.user-edit').modal();

        });


        $( document ).on('click' , '.user-list .view-payment-details' , function(e){

            url = $(this).attr('data-url');

            $('.user-edit').modal();

        });


        $('.user-edit').on('shown.bs.modal', function(){

            $( ".user-edit .modal-body" ).load( url, function(response, status, xhr){

                if(status == 'error'){
                    var msg = 'Sorry but there was an error: ';
                    $( ".ajax-errors" ).html( msg + xhr.status + " " + xhr.statusText );
                }

                $(function () {
                    //Initialize Select2 Elements
                    $(".select2").select2();

                });

            });
        });

        $('.user-edit').on('hidden.bs.modal', function(){

            var prep_content = $('.prep').html();

            $( ".user-edit .modal-body").html(prep_content);

        });

    })();


    // User update form
    (function(){

        $(document).on('submit', '.update-user', function(){

            // remove prior message which might have accumulated during earlier update
            $( '.error-message' ).each(function( ) {
                $(this).removeClass('make-visible');
                $(this).html('');
            });


            $( 'input' ).each(function( ) {
                $(this).removeClass('errors');
            });



            // current form under process
            var current_form = $(this);

            // === Dynamically get all the values of input data
            var request_data = {};

            request_data['_token']  = $(this).find('input[name=_token]').val();
            request_data['_method'] = $(this).find('input[name=_method]').val();

            current_form.find('[name]').each(function(){
                request_data[$(this).attr("name")] = $(this).val();
            });



            $.post(
                $(this).prop('action'),
                request_data,
                function(data){

                    console.log(data);

                    if(data.status == 'success'){

                        $('.user-edit').modal('hide');

                        current_form.find('[name]').each(function(){
                            $(this).val('');
                        });

                        if(window.location.href == data.url+"/create"){
                            window.location.href = data.url;
                        }else if(window.location.href.indexOf("password/reset") > -1){
                            window.location.href = data.url;
                        }else if(data.url == APP_URL+"/admin/user"){
                            window.location.href = data.url;
                        }else if(data.url == APP_URL+"/admin/user/create"){
                            window.location.href = data.url;
                        }else if(data.url == APP_URL+"admin/state/create"){
                            window.location.href = data.url;
                        }
                        else{
                            location.reload();
                        }



                    }else if(data.status == 'fails'){

                        for (var key in data.errors) {

                            // skip loop if the property is from prototype
                            if (!data.errors.hasOwnProperty(key)) continue;

                            var error_message = data.errors[key];

                            current_form.find("[name="+key+"]").addClass('errors');

                            var parent = current_form.find("[name="+key+"]").parent();
                            parent.find('.error-message').addClass('make-visible').html(error_message);

                        }
                    }

                }
            );


            return false;

        });

    })();



    $('.data-table').DataTable();







    // sweet alert delete
    $(document).on('submit', 'form.delete-user-form', function(){

        var current_form = $(this);


        swal({   title: "Are you sure?",
                text: "Are you sure you want to delete this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function(){

                var request_data = {};

                request_data['_token']  = current_form.find('input[name=_token]').val();
                console.log(request_data['_token']);

                $.ajax({
                    type: current_form.attr('method'),
                    url: current_form.attr('action'),
                    data: request_data,
                    success: function (data) {
                        //console.log(data);
                        if(data.status == 'success') {
                            // console.log('success');
                            location.reload();
                        }
                    }
                });

                swal("Deleted!", "Deleted Successfully!", "success");
            });

        return false;
    }) ;



    (function(){

        ///Activate User Js
        $(document).on('submit', 'form.approve-user-form', function(){

            var current_form = $(this);


            swal({   title: "Are you sure?",
                    text: "Are you sure you want to approve this!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#008000",
                    confirmButtonText: "Yes, Approve it!",
                    closeOnConfirm: false
                },
                function(){

                    var request_data = {};

                    request_data['_token']  = current_form.find('input[name=_token]').val();
                    console.log(request_data['_token']);

                    $.ajax({
                        type: current_form.attr('method'),
                        url: current_form.attr('action'),
                        data: request_data,
                        success: function (data) {
                            //console.log(data);
                            if(data.status == 'success') {
                                // console.log('success');
                                location.reload();
                            }
                            //if(data.hasOwnProperty("message")){
                            //    swal("Success!", data.message)
                            //}
                        }
                    });

                    swal("Approved!!", "success");
                });

            return false;
        }) ;

    })();

    //
    (function(){

        ///Activate User Js
        $(document).on('submit', 'form.verify-comment', function(){

            var current_form = $(this);


            swal({   title: "Are you sure?",
                    text: "Are you sure you want to publish this!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55 ",
                    confirmButtonText: "Yes, Publish it!",
                    closeOnConfirm: false
                },
                function(){

                    var request_data = {};

                    request_data['_token']  = current_form.find('input[name=_token]').val();
                    console.log(request_data['_token']);

                    $.ajax({
                        type: current_form.attr('method'),
                        url: current_form.attr('action'),
                        data: request_data,
                        success: function (data) {
                            console.log(data);
                            if(data.status == 'success') {
                                // console.log('success');
                                location.reload();
                            }else if(data.status == 'fail'){
                                swal("Error!", data.message)
                            }
                        }
                    });

                    swal("Verified!", "Published Successfully!", "success");
                });

            return false;
        }) ;

    })();






    (function(){

        var url;

        // Create course form submission
        $( document ).on('click' , '.user-list .edit-user-form' , function(e){


            url = $(this).attr('data-url');

            //console.log(url);

            $('.user-edit').modal();

        });



        $('.user-edit').on('shown.bs.modal', function(){


            $( ".user-edit .modal-body" ).load( url, function(response, status, xhr){

                if(status == 'error'){
                    var msg = 'Sorry but there was an error: ';
                    $( ".ajax-errors" ).html( msg + xhr.status + " " + xhr.statusText );
                }

                $(function () {
                    //Initialize Select2 Elements
                    $(".select2").select2();

                });



            });
        });

        $('.user-edit').on('hidden.bs.modal', function(){

            var prep_content = $('.prep').html();

            $( ".user-edit .modal-body").html(prep_content);

        });

    })();


    //for note
    (function(){

        var url;

        // Create course form submission
        $( document ).on('click' , '.user-list .edit-note-form' , function(e){


            url = $(this).attr('data-url');

            //console.log(url);

            $('.note-edit').modal();

        });



        $('.note-edit').on('shown.bs.modal', function(){


            $( ".note-edit .modal-body" ).load( url, function(response, status, xhr){

                if(status == 'error'){
                    var msg = 'Sorry but there was an error: ';
                    $( ".ajax-errors" ).html( msg + xhr.status + " " + xhr.statusText );
                }

            });
        });

        $('.note-edit').on('hidden.bs.modal', function(){

            //$('.note-edit').modal('hide');

            var prep_content = $('.prep').html();

            $( ".note-edit .modal-body").html(prep_content);

        });

    })();



});




//JS for order create








