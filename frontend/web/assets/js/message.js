$(document).ready(function () {
    "use strict";
    if (('.send-message').length) {
        $('.send-message').on('click', function () {
            var form = $('.contact-form');
            var validator = form.validate();
            if (form.valid()) {
                var data = form.serializeArray();
                $.ajax({
                    url: baseUrl + '/site/send-message',
                    method: 'post',
                    data: {
                        'message': data
                    },
                    success: function (response) {
                        if (response == true) {
                            $('.message-button-wrapper').append('<div class="message-result animated fadeInRight"><i class="fa fa-fa-times"></i>Your message has been sent. Thank You.</div>');
                            setTimeout(function () {
                                $('.message-result').remove();
                            }, 3000);
                        } else {
                            $('.message-button-wrapper').append('<div class="message-result animated fadeInRight"><i class="fa fa-fa-times"></i>Sorry could not send message. Please try again.</div>');
                            setTimeout(function () {
                                $('.message-result').remove();
                            }, 3000);
                        }
                    },
                    error: function () {
                        $('.message-button-wrapper').append('<div class="message-result animated fadeInRight"><i class="fa fa-fa-times"></i>Server Error.Sorry could not send message. Please try again.</div>');
                        setTimeout(function () {
                            $('.message-result').remove();
                        }, 3000);
                    }

                });


            } else {
                validator.focusInvalid();
            }


        });


    }
});