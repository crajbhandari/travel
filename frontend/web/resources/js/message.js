$(function () {
    $('.send').on("click", function (e) {
        var form = $("#home_form");
       var validator = form.validate();
       e.preventDefault();
       if (form.valid()) {
          $.ajax({
             url: baseUrl + "/site/message",
             type: 'post',
             data: {
                contact:
                      {
                         'name': form.find('[name="ename"]').val(),
                         'email': form.find('[name="eemail"]').val(),
                         'phone': form.find('[name="ephone"]').val(),
                         'subject': form.find('[name="esubject"]').val(),
                         'country': form.find('[name="ecountry"]').val(),
                         'city': form.find('[name="ecity"]').val(),
                         'message': form.find('[name="emessage"]').val()
                      }
             },
             success: function (data) {
                console.log(data);
                // alert(data);
                if (data === 'false') {
                   swal({
                      title: "Oops!",
                      text: "Sorry! Your message couldn`t be sent.!",
                      icon: "error",
                      button: "OK!"
                   });
                } else {
                   $('.submit-contact').addClass('disabled');
                   swal({
                      title: "Message Sent!",
                      text: "Your message has been sent!",
                      icon: "success",
                      button: "OK!"
                   });
                   // location.reload();
                }
             },
             error: function () {
                swal({
                   title: "Server Error!",
                   text: "Your message could not be sent!",
                   icon: "error",
                   button: "OK!"
                });
             }
          });
       } else {
          validator.focusInvalid();
       }
    });
});