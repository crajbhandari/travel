var modal = $('#modal-section-categories');
$(document).ready(function () {
   "use strict";

   function addCategory() {
      $('.add-categories').on('click', function () {
         var type = $(this).parents('.content-section').data('type');
         var page = $('.content-editor').data('page');
         var contents = $('.content-section-wrapper');
         var content = $('.content-section');
         var url = baseUrl + '/content/fetch-categories/' + type;
         console.log(url);
         $.ajax({
            url: baseUrl + 'content/fetch-categories/' + type,
            success: function (data) {
               var da = JSON.parse(data);
               console.log(da);
               /*    if (data === 'true') {
                      console.log(data);
                      return true;
                   } else {
                      notify('Sorry, Please try again.', 'danger');
                      return false;
                   }*/
            },
            error: function () {
               notify('Sorry, Server Error.', 'danger');
               return false;
            }
         });

         var options = {
            valueNames: [ 'name', 'born' ]
         };

         var userList = new List('users', options);
         modal.modal("show");

      });
   }

// Trigger Add Section
   $('.add-section').on('click', function () {

      console.log(type);
      console.log(page);
      addCategory();
   });
   addCategory();
});
