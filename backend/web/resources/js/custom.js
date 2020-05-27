/* = Custom javascript goes here =*/
function readURL(input) {
   //  console.log(input);
   if (input.files && input.files[0]) {
      var id = $(input).attr('id');
      var file = input.value;
      var filename = file.substr(file.lastIndexOf('\\') + 1).split('.')[0];
      var extension = file.split('.')[1];
      var reader = new FileReader();

      reader.onload = function (e) {
         $('#' + id + '-image')
               .attr('src', e.target.result)
               .css('visibility', 'visible')
               .show();
         $('#' + id + '-label span').html(filename + '.' + extension);
      };
      reader.readAsDataURL(input.files[0]);
   }
}

function notify(type, message) {
   $.notify({
      // options
      message: message
   }, {
      // settings
      type: type,
      allow_dismiss: true,

      newest_on_top: true,
      placement: {
         from: "top",
         align: "right"
      },
      delay: 5000,
      timer: 1000,
      animate: {
         enter: 'animated fadeInDown',
         exit: 'animated fadeOutUp'
      },
      template: '<div data-notify="container" class="notify_container alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span class="data-notify-message" data-notify="message">{2}</span>' +
            '</div>'
   });
}

function notifyFlash(flash) {
   $.notify({
      // options
      message: flash.message
   }, {
      // settings
      type: flash.type,
      allow_dismiss: true,

      newest_on_top: true,
      placement: {
         from: "top",
         align: "right"
      },
      delay: 0,
      timer: 1000,
      animate: {
         enter: 'animated fadeInDown',
         exit: 'animated fadeOutUp'
      },
      template: '<div data-notify="container" class="notify_container alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span class="data-notify-message" data-notify="message">{2}</span>' +
            '</div>'
   });
}

$(document).ready(function () {
   "use strict";
   if ($('.remove-image').length) {
      $('.remove-image').on("click", function () {
         var parent = $(this).parents('.custom-file');
         var $this = $(this);
         var imgAct = $(this).parents('.image-actions');
         var imageHolder = $(this).parents('.page-image');
         $.ajax({
            'url': baseUrl + '/site/remove-image',
            'method': 'post',
            'data': {
               'tab': $this.data('tab'),
               'id': $this.data('id'),
            },
            success: function (result) {
               if (!result == 'true') {
                  notify('danger', 'Sorry File Not Removed');
               } else {
                  notify('success', 'File Removed');
                  parent.find('.custom-file-input-image').attr('src', '');
                  imgAct.remove();
                  imageHolder.remove();
               }
            },
            error: function (error, data) {
               notify('danger', 'Server Error. Sorry ! File Not Removed <br>' + data);
            }


         });

      });
   }
   if ($('.delete-blog').length) {
      $('.delete-blog').on("click", function () {
         var id = $(this).data("id");
         var table = $(this).data("tab");
         var type = $(this).data('type') || 'Item';
         var row = $(this).parents('tr');
         swal({
                  title: "Delete this " + type + " ?",
                  text: "Are you sure, you want delete this " + type,
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Yes, delete it",
                  cancelButtonText: "Cancel",
                  closeOnConfirm: true,
                  closeOnCancel: true
               },
               function (isConfirm) {
                  if (isConfirm) {
                     $.ajax({
                        url: baseUrl + "/site/delete-item",
                        type: 'post',
                        data: {
                           id: id,
                           table: table,
                        },
                        success: function (data) {

                           if (data == true) {
                              notify('success', 'Blog  Deleted.');
                              swal({
                                 title: table+" Deleted!",
                                 icon: "success",
                              });
                              location.reload();
                              // row.remove();
                           } else {
                              notify('danger', type + ' not Deleted.');
                           }
                        },
                        error: function () {
                           notify('danger', 'Server Error. ' + type + ' not Deleted. Please try again.');
                        }
                     });
                  }
               });

      });
   }
   if ($('.delete-item').length) {
      $('.delete-item').on("click", function () {
         var id = $(this).data("id");
         var table = $(this).data("tab");
         var type = $(this).data('type') || 'Item';
         var row = $(this).parents('tr');
         swal({
                  title: "Delete this " + type + " ?",
                  text: "Are you sure, you want delete this " + type,
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Yes, delete it",
                  cancelButtonText: "Cancel",
                  closeOnConfirm: true,
                  closeOnCancel: true
               },
               function (isConfirm) {
                  if (isConfirm) {
                     $.ajax({
                        url: baseUrl + "/site/delete-item",
                        type: 'post',
                        data: {
                           id: id,
                           table: table,
                        },
                        success: function (data) {

                           if (data == true) {
                              notify('success', table + ' Deleted.');
                              swal({
                                 title: table+" Deleted!",
                                 icon: "success",
                              });
                              location.reload();
                              // row.remove();
                           } else {
                              notify('danger', type + ' not Deleted.');
                           }
                        },
                        error: function () {
                           notify('danger', 'Server Error. ' + type + ' not Deleted. Please try again.');
                        }
                     });
                  }
               });

      });
   }
});
$(function () {
   $('.show-message').on("click", function () {

      $('.modal').modal();
      var cid = $(this).data("id");
      var modal = $('.modal-message');
      $.ajax({
         url: baseUrl + "/messages/read-message",
         type: 'post',
         data: {
            id: cid
         },
         success: function (data) {

            if (data === '') {
               typeAlert('Error', 'Sorry, Could not open Message', 'error');
            } else {
               var a = JSON.parse(data);
               //message seen or new
               if ($('[data-for="new"]')) {
                  $('[data-id="id' + a['id'] + '"]').html('<span data-for="seen" class="label label-danger">Seen</span>');
                  $('.message-noti').html($('.message-noti').text() - 1);
               } else {
                  $('[data-id="id' + a['id'] + '"]').html('<span data-for="new" class="label label-danger">New</span>');
               }
               $('.para-content').html(a['result'])
               // modal.find('.modal-dialog').html(a['result']);
               // modal.modal('show');
               // $('.refresh').removeClass('hidden')
            }
         },
         error: function () {
            typeAlert('Error', 'Sorry, Server error. Please try again later ', 'error');
         }
      });

   });
});