var modal = $('#modal-section-categories');
$(document).ready(function () {
   "use strict";

   function addCategory() {
      $('.add-categories').on('click', function () {
         var type = $(this).data('type');
         var page = $('.content-editor').data('page');
         var contents = $('.content-section-wrapper');
         var content = $('.content-section');
         $.ajax({
            url: baseUrl + 'content/fetch-categories',
            type: 'post',
            data: {
               type: type
            },
            success: function (data) {
               if (data === 'true') {
                  console.log(data);
                  return true;
               } else {
                  notify('Sorry, Please try again.', 'danger');
                  return false;
               }
            },
            error: function () {
               notify('Sorry, Server Error.', 'danger');
               return false;
            }
         });

         modal.modal("show");
         console.log(modal);
         modal.modal('open');
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
