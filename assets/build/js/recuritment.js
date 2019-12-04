
// var base_url = window.location.origin;

// if (res == "true") {
//     $("#email_verify").text("");
//     //Add Class Active
//     $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
//     //show the next fieldset
//     next_fs.show();
//     //hide the current fieldset with style
//     current_fs.animate({ opacity: 0 }, {
//         step: function (now) {
//         // for making fielset appear animation
//         opacity = 1 - now;

//         current_fs.css({
//             'display': 'none',
//             'position': 'relative'
//         });
//             next_fs.css({ 'opacity': opacity });
//             },
//             duration: 600
//     });
// } else {
//     $("#email_verify").text("Already user taken, Please enter phone number then click next to do update..");
//     $('.error').text("");
//     //show the next fieldset
//     next_fs.show();
// }     




$(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $("#checkUser").click(function () {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        var email = $("#email_id").val();
        var phone = $("#phone").val();
        //var base_url = $("#base_url"); 

        if (email == '') {
            $('.error').text("Please fill the email?");
            current_fs.show();
        } else if (phone == '') {
            $('.error').text("Please fill the phone?");
            current_fs.show();
        } else {
            //alert($("#email_id").val()+' '+$("#phone").val().length+' '+base_url);
            if ($("#email_id").val().length >= 4) {
                $.ajax({
                    type: "POST",
                    url: "recruitment/check_user_exist",
                    data: { "email_id": email, "phone_no": phone },
                    success: function (res) {
                        //alert(res);                                   

                        if (res == 0 || res == '0') {
                            console.log(res);

                        } else {

                            var json_personal = JSON.parse(res);

                            console.log(json_personal);

                            $('#personal_id').val(json_personal['personal_id']);
                            $('#first_name').val(json_personal['first_name']);
                            $('#last_name').val(json_personal['last_name']);
                            $('#dob').val(json_personal['dob']);
                            //console.log("#gender value["+json_personal['gender']+"']");
                            $("input[value=" + json_personal['gender'] + "]").attr('checked', true);
                            $("input[value=" + json_personal['married_status'] + "]").attr('checked', true);
                            $('#email_id').val(json_personal['#email_id']);
                            $('#father_name').val(json_personal['father_name']);
                            $('#father_occupation').val(json_personal['father_occupation']);
                            $("#nationality").val(json_personal['nationality']);
                            //console.log("#cummunity value['"+json_personal['cummunity']+"']");
                            $("select option[value='" + json_personal['cummunity'] + "']").attr('selected', true);
                            $('#religion').val(json_personal['religion']);
                            $('#caste').val(json_personal['caste']);
                            $('#mother_tongue').val(json_personal['mother_tongue']);
                            $('#personal_email_id').val(json_personal['email_id']);
                            $('#phone_no').val(json_personal['phone_no']);
                            $('#native_place').val(json_personal['native_place']);

                        }

                        //Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({ opacity: 0 }, {
                            step: function (now) {
                                // for making fielset appear animation
                                opacity = 1 - now;

                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({ 'opacity': opacity });
                            },
                            duration: 600
                        });

                    }
                });

            } else {

                $("#email_verify").text(""); /*css({ "background-image" "none" })*/
                $('.error').text("");

            }
        }

    });

    $("#personalInfo").click(function (){
    //function insert_personal() {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        var personal_form = $('.personalInfo').serialize();
    
        $.ajax({
            type: "GET",
            url: "recruitment/personal_insert?" + personal_form,
            //data: form.serialize(), // <--- THIS IS THE CHANGE        
            success: function (data) {
                //console.log(data);
                var JsonData = JSON.parse(data);
    
                if (JsonData['personal_id'] == 0 || JsonData['personal_id'] == '0') {
                    console.log(data);
                } else {
                    //alert(data + " Suresh LS");
                    console.log(JsonData);

                    $('#per_com_id').val(JsonData['personal_id']);

                    if(!($.isEmptyObject(JsonData['communication'][0]))){
                        $('#type_of_address_1').val(JsonData['communication'][0]['type_of_address']);
                        $('#com_id').val(JsonData['communication'][0]['com_id']);                    
                        $('#phone_no_1').val(JsonData['communication'][0]['phone_no']);
                        $('#street_address_1').val(JsonData['communication'][0]['street_address']);
                        $("select option[value='" + JsonData['communication'][0]['city'] + "']").attr('selected', true);
                        $("select option[value='" + JsonData['communication'][0]['state'] + "']").attr('selected', true);
                        $('#pin_no_1').val(JsonData['communication'][0]['pin_no']);
                       
                    }
                    if(!($.isEmptyObject(JsonData['communication'][1]))){
                        $('#type_of_address_2').val(JsonData['communication'][1]['type_of_address']);
                        $('#com_id_2').val(JsonData['communication'][1]['com_id']);
                        $('#phone_no_2').val(JsonData['communication'][1]['phone_no']);
                        $('#street_address_2').val(JsonData['communication'][1]['street_address']);
                        $("select option[value='" + JsonData['communication'][1]['city'] + "']").attr('selected', true);
                        $("select option[value='" + JsonData['communication'][1]['state'] + "']").attr('selected', true);
                        $('#pin_no_2').val(JsonData['communication'][1]['pin_no']);                 
                    }
                }    
    
                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
    
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 600
                });
            },
            error: function () { alert("Error posting feed."); }
        });
    
        //return false;
    });

    $("#communicationInfo").click(function (){
        //function insert_personal() {
    
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
    
            var communication_form = $('.communicationInfo').serialize();
        
            $.ajax({
                type: "GET",
                url: "recruitment/communication_insert?" + communication_form,
                //data: form.serialize(), // <--- THIS IS THE CHANGE        
                success: function (data) {

                    console.log(data);
                    // var JsonData = JSON.parse(data);

                    // console.log(JsonData);
        
                    // if (JsonData['personal_id'] == 0 || JsonData['personal_id'] == '0') {
                    //     console.log(data);
                    // } else {
                    //     console.log(data);
                    // }    
        
                    $('#personal_id').val(data['personal_id']);
                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({ opacity: 0 }, {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;
        
                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({ 'opacity': opacity });
                        },
                        duration: 600
                    });
                },
                error: function () { alert("Error posting feed."); }
            });
        
            //return false;
        });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function () {
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    function setAddress() {
        if ($('#phone_no_1').val() != '') {
            $('.success').html('Sucessfully copied..');
            if ($("#copy_address").is(":checked")) {
                $('#phone_no_2').val($('#phone_no_1').val());
                $('#street_address_2').val($('#street_address_1').val());
                $('#city_2').val($('#city_1').val());
                $('#state_2').val($('#state_1').val());
                $('#pin_2').val($('#pin_1').val());
                $('#phone_no_2').attr('disabled', 'disabled');
                $('#street_address_2').attr('disabled', 'disabled');
                $('#city_2').attr('disabled', 'disabled');
                $('#state_2').attr('disabled', 'disabled');
                $('#pin_2').attr('disabled', 'disabled');
                $('.error').remove();
            } else {
                $('#phone_no_2').removeAttr('disabled');
                $('#street_address_2').removeAttr('disabled');
                $('#city_2').removeAttr('disabled');
                $('#state_2').removeAttr('disabled');
                $('#pin_2').removeAttr('disabled');
            }
        } else {
            $('.error').html('Please fill the address first..??');
            $("#copy_address").prop("checked", false);
        }
    }

    $('#copy_address').click(function () {
        setAddress();
    });

});

//     //Custom method to validate username
//     $.validator.addMethod("usernameRegex", function(value, element) {
//         return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
//     }, "Username must contain only letters, numbers");

//     $(".next").click(function(){
//         var form = $("#checkUse1");
//         form.validate({
//             errorElement: 'span',
//             errorClass: 'help-block',
//             highlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').addClass("has-error");
//             },
//             unhighlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').removeClass("has-error");
//             },
//             rules: {
//                 email: {
//                     required: true,
//                     minlength: 3,
//                 },

//             },
//             messages: {
//                 email: {
//                     required: "Email required",
//                 },
//             }
//         });
//         if (form.valid() === true){
//             if ($('#user1').is(":visible")){
//                 current_fs = $('#personal');
//                 next_fs = $('#communication');
//             }else if($('#communication').is(":visible")){
//                 current_fs = $('#education');
//                 next_fs = $('#education');
//             }

//             next_fs.show(); 
//             current_fs.css({ 'opacity': opacity });;
//         }
//     });

//     $('#previous').click(function(){
//         if($('#company_information').is(":visible")){
//             current_fs = $('#company_information');
//             next_fs = $('#account_information');
//         }else if ($('#personal_information').is(":visible")){
//             current_fs = $('#personal_information');
//             next_fs = $('#company_information');
//         }
//         next_fs.show(); 
//         current_fs.hide();
//     });


// });


// $(document).ready(function(){

//     // Custom method to validate username
//     $.validator.addMethod("usernameRegex", function(value, element) {
//         return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
//     }, "Username must contain only letters, numbers");

//     $(".next").click(function(){
//         var form = $("#checkUser");
//         form.validate({
//             errorElement: 'span',
//             errorClass: 'help-block',
//             highlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').addClass("has-error");
//             },
//             unhighlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').removeClass("has-error");
//             },
//             rules: {
//                 email: {
//                     required: true,
//                     minlength: 3,
//                 },

//             },
//             messages: {
//                 email: {
//                     required: "Email required",
//                 },
//             }
//         });
//         if (form.valid() === true){
//             if ($('#user').is(":visible")){
//                 current_fs = $('#communication1');
//                 next_fs = $('#company_information');
//             }else if($('#company_information').is(":visible")){
//                 current_fs = $('#company_information');
//                 next_fs = $('#personal_information');
//             }

//             next_fs.show(); 
//             current_fs.hide();
//         }
//     });

//     $('#previous').click(function(){
//         if($('#company_information').is(":visible")){
//             current_fs = $('#company_information');
//             next_fs = $('#account_information');
//         }else if ($('#personal_information').is(":visible")){
//             current_fs = $('#personal_information');
//             next_fs = $('#company_information');
//         }
//         next_fs.show(); 
//         current_fs.hide();
//     });





