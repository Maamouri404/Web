(function($) {

    $("#birth_date").datepicker({
        dateFormat: "mm - dd - yy",
        showOn: "both",
        buttonText: '<i class="zmdi zmdi-calendar-alt"></i>',
    });

    $('.add-info-link ').on('click', function() {
        $('.add_info').toggle("slow");
    });

    $('.add-info-link1 ').on('click', function() {
        $('.add_info1').toggle("slow");
    })

    $('.add-info-link2 ').on('click', function() {
        $('.add_info2').toggle("slow");
    });

    $('.add-info-link3 ').on('click', function() {
        $('.add_info3').toggle("slow");
    });





    $('#signup-form').validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            phone_number: {
                required: true
            },
            password: {
                required: true
            },
            re_password: {
                required: true,
                equalTo: "#password"
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });



    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);