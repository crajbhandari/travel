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

$(function ($) {
   "use strict";
   $(document).ready(function () {
      //LEFT MOBILE MENU OPEN
      $(".atab-menu").on('click', function () {
         $(".sb2-1").css("left", "0");
         $(".btn-close-menu").css("display", "inline-block");
      });

      //LEFT MOBILE MENU CLOSE
      $(".btn-close-menu").on('click', function () {
         $(".sb2-1").css("left", "-350px");
         $(".btn-close-menu").css("display", "none");
      });

      //MATERIAL SELECT BOX
      $('select').material_select();

      //MATERIAL COLLAPSIBLE
      $('.collapsible').collapsible();

      //MATERIAL CHIP COMMON
      $('.chips').material_chip();
      $('.chips-initial').material_chip({
         data: [{
            tag: 'Apple',
         }, {
            tag: 'Microsoft',
         }, {
            tag: 'Google',
         }],
      });

      //MATERIAL CHIP PLACEHOLDER
      $('.chips-placeholder').material_chip({
         placeholder: 'Enter a tag',
         secondaryPlaceholder: '+Amini (press enter)',
      });

      //MATERIAL CHIP AUTO-COMPLETE
      $('.chips-autocomplete').material_chip({
         autocompleteOptions: {
            data: {
               'Apple': null,
               'Microsoft': null,
               'Google': null
            },
            limit: Infinity,
            minLength: 1
         }
      });
      if ($('[data-plugin="datatable"]').length) {
         $('[data-plugin="datatable"]').dataTable({
            "aaSorting": [],
            "bAutoWidth": true,
            "aoColumnDefs": [
               {"bSortable": false, "aTargets": [0, -1]},
               {"bSearchable": false, "aTargets": [-1]}
            ],
            "paging": false
         });
      }
      if ($('[data-plugin="datatable-no-paging"]').length) {
         $('[data-plugin="datatable-no-paging"]').dataTable({
            "aaSorting": [],
            "bAutoWidth": true,
            "paging": false,
            "aoColumnDefs": [
               {"bSortable": false, "aTargets": [0, -1]},
               {"bSearchable": false, "aTargets": [-1]}
            ]
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
                              console.log(data);
                              if (data == true) {
                                 notify('success', table + ' Deleted.');
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
      if ($('.check-message').length) {
         $('.check-message').on("change", function () {
            var $this = $(this);
            var table = $(this).parents('tbody');
            var row = $(this).parents('tr');
            var id = row.data("id");
            if ($('.check-message:checked').length) {
               $('.delete-multiple').show();

            } else {
               $('.delete-multiple').hide();
            }

         });
         $('body').on('click', '.delete-multiple', function () {
            var ids = [];
            $('.check-message:checked').each(function () {
               ids.push($(this).val());
            });

            swal({
                     title: "Delete selected Messages",
                     text: "Are you sure, you want delete these messages ",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonClass: "btn-danger",
                     confirmButtonText: "Yes, delete them",
                     cancelButtonText: "Cancel",
                     closeOnConfirm: true,
                     closeOnCancel: true
                  },
                  function (isConfirm) {
                     if (isConfirm) {
                        $.ajax({
                           url: baseUrl + "/site/delete-all",
                           type: 'post',
                           data: {
                              ids: ids,
                              table: "Messages",
                           },
                           success: function (data) {
                              console.log(data);
                              if (data == true) {
                                 //    notify('success', type + ' Deleted.');
                                 location.reload();
                                 // row.remove();
                              } else {
                                 notify('danger', 'Messages not Deleted.');
                              }
                           },
                           error: function () {
                              notify('danger', 'Server Error. Messages not Deleted. Please try again.');
                           }
                        });
                     }
                  });
            //    console.log(ids);
         });
      }

      if ($('.summernote').length) {
         $('.summernote').summernote({
            height: 350,
            minHeight: null,
            maxHeight: null,
            focus: false,
            toolbar: [
               // ['style', ['style']],
               ['undo', ['undo', 'redo']],
               ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
               ['fontname', ['fontname', 'fontsize']],
               // ['fontsize', ['fontsize']],
               ['color', ['color']],
               ['para', ['ol', 'ul']],// , 'paragraph', 'height'
               ['table', ['table']],
               ['insert', ['link']],
               ['view', ['fullscreen', 'codeview']]
            ],
            fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '28', '36', '42', '48', '64'],
            colors: [
               ['#535353', '#FEE073', '#FCCD09', '#FFFFFF'],
               ['#000000', '#424242', '#636363', '#9C9C94', '#CEC6CE', '#EFEFEF', '#F7F7F7', '#FFFFFF'],
               ['#FF0000', '#FF9C00', '#FFFF00', '#00FF00', '#00FFFF', '#0000FF', '#9C00FF', '#FF00FF'],
               ['#F7C6CE', '#FFE7CE', '#FFEFC6', '#D6EFD6', '#CEDEE7', '#CEE7F7', '#D6D6E7', '#E7D6DE'],
               ['#E79C9C', '#FFC69C', '#FFE79C', '#B5D6A5', '#A5C6CE', '#9CC6EF', '#B5A5D6', '#D6A5BD'],
               ['#E76363', '#F7AD6B', '#FFD663', '#94BD7B', '#73A5AD', '#6BADDE', '#8C7BC6', '#C67BA5'],
               ['#CE0000', '#E79439', '#EFC631', '#6BA54A', '#4A7B8C', '#3984C6', '#634AA5', '#A54A7B'],
               ['#9C0000', '#B56308', '#BD9400', '#397B21', '#104A5A', '#085294', '#311873', '#731842'],
               ['#630000', '#7B3900', '#846300', '#295218', '#083139', '#003163', '#21104A', '#4A1031']
            ],
            lineHeights: ['1.0', '1.2', '1.4', '1.5', '1.6', '1.8', '2.0', '2.25', '2.5', '2.75', '3.0', '3.25', '3.5', '3.75', '4.0'],

         });
      }
      if ($('.summernote-basic').length) {
         $('.summernote-basic').summernote({
            height: 350,
            minHeight: null,
            maxHeight: null,
            focus: false,
            toolbar: [
               ['font', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'clear']],
               ['para', ['height']],
               ['fontname', ['fontname']],
               ['fontsize', ['fontsize']],
               ['color', ['color']],
            ],

            fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '28', '36', '42', '48', '64'],
            colors: [
               ['#535353', '#FEE073', '#FCCD09', '#FFFFFF'],
               ['#000000', '#424242', '#636363', '#9C9C94', '#CEC6CE', '#EFEFEF', '#F7F7F7', '#FFFFFF'],
               ['#FF0000', '#FF9C00', '#FFFF00', '#00FF00', '#00FFFF', '#0000FF', '#9C00FF', '#FF00FF'],
               ['#F7C6CE', '#FFE7CE', '#FFEFC6', '#D6EFD6', '#CEDEE7', '#CEE7F7', '#D6D6E7', '#E7D6DE'],
               ['#E79C9C', '#FFC69C', '#FFE79C', '#B5D6A5', '#A5C6CE', '#9CC6EF', '#B5A5D6', '#D6A5BD'],
               ['#E76363', '#F7AD6B', '#FFD663', '#94BD7B', '#73A5AD', '#6BADDE', '#8C7BC6', '#C67BA5'],
               ['#CE0000', '#E79439', '#EFC631', '#6BA54A', '#4A7B8C', '#3984C6', '#634AA5', '#A54A7B'],
               ['#9C0000', '#B56308', '#BD9400', '#397B21', '#104A5A', '#085294', '#311873', '#731842'],
               ['#630000', '#7B3900', '#846300', '#295218', '#083139', '#003163', '#21104A', '#4A1031']
            ],
            lineHeights: ['1.0', '1.2', '1.4', '1.5', '1.6', '1.8', '2.0', '2.25', '2.5', '2.75', '3.0', '3.25', '3.5', '3.75', '4.0'],
         });
      }
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

      if ($('.add-social-media-item').length) {
         var socialTable = $('.social-media-input-table');
         var scount = socialTable.find('tbody tr').length;

         $('.delete-media').on('click', function () {
            $(this).parents('tr').remove();
         });
         $('.add-social-media-item').on('click', function () {
            socialTable.show();
            var select = $('<select class="form-control required"><option value="">Select Media</option></select>');
            var input = $('<input type="text" class="form-control required" value="" placeholder="Link"/>');

            if (socialIcons) {
               $.each(socialIcons, function (index, value) {
                  var option = '<option value="' + index + '">' + value.name + '</option>';
                  select.append(option);
               });
            }
            var t = '<tr>' +
                  '<td></td>' +
                  '<td></td>' +
                  '<td><a href="javascript:void(0);" class="delete-media"><i class="fa fa-times"></i></a></td>' +
                  '</tr>';
            var tableBody = $(t);
            select.attr('name', 'team[social][' + scount + '][media]');
            input.attr('name', 'team[social][' + scount + '][link]');
            tableBody.find('td').eq(0).append(select);
            tableBody.find('td').eq(1).append(input);
            tableBody.find('td').find('.delete-media').on('click', function () {
               $(this).parents('tr').remove();
            });
            socialTable.find('tbody').append(tableBody);
            scount += 1;
         });
      }

      /*  if ($('.match-height').length) {

       $('.mh-item').matchHeight({
       byRow: true,
       property: 'height',
       target: null,
       remove: false
       });
       }*/
      if ($('.add-contact-details').length) {
         var contactTable = $('.contact-info');
         var r = contactTable.find('li').length;
         contactTable.find('.delete-row').on('click', function () {
            $(this).parents('li').remove();
         });
         $('.add-contact-details').on('click', function () {
            contactTable.show();
            var a = '<li class="col-lg-4 col-md-6 col-xs-12">' +
                  '<div class = "p-15">' +
                  '<h5 class = "pull-left">Enter details here</h5>' +
                  '<a href = "javascript:void(0);" class = " pull-right delete-row">' +
                  '<i class = "mdi mdi-close"></i>' +
                  '</a>' +
                  '<div class = "clearfix"></div>' +
                  '<div class = "form-group">' +
                  '<label for = "' + r + '-title" class = "control-label required">Title</label>' +
                  '<input id = "' + r + '-title"  value = "" type = "text" class = "form-control c-title required">' +
                  '</div>' +
                  '<div class = "form-group">' +
                  '<label for = "' + r + '-subtitle" class = "control-label required">Sub Title</label>' +
                  '<input id = "' + r + '-subtitle"  value = "" type = "text" class = "form-control c-subtitle required">' +
                  '</div>' +
                  '<div class = "form-group">' +
                  '<label for = "' + r + '-email" class = "control-label required">Email</label>' +
                  '<input id = "' + r + '-email"  value = "" type = "text" class = "form-control c-email required">' +
                  '</div>' +
                  '<div class = "form-group">' +
                  '<label for = "' + r + '-phone" class = "control-label required">Phone</label>' +
                  '<input id = "' + r + '-phone"  value = "" type = "text" class = "form-control c-phone required">' +
                  '</div>' +
                  '<div class = "form-group">' +
                  '<label for = "' + r + '-address" class = "control-label required">Address</label>' +
                  '<textarea id = "' + r + '-address"  type = "text" class = "form-control required c-address"></textarea>' +
                  '</div>' +
                  '</div>' +
                  '</li>';
            var tr = $(a);
            tr.find('.c-title').attr('name', 'setting[content][' + r + '][title]');
            tr.find('.c-subtitle').attr('name', 'setting[content][' + r + '][subtitle]');
            tr.find('.c-email').attr('name', 'setting[content][' + r + '][email]');
            tr.find('.c-phone').attr('name', 'setting[content][' + r + '][phone]');
            tr.find('.c-address').attr('name', 'setting[content][' + r + '][address]');
            tr.find('.delete-row').on('click', function () {
               tr.remove();
            });
            r++;
            contactTable.append(tr);
         });
      }
      $(function () {
         $('.remove-image-package').on("click", function () {
            var cindex = $(this).data("id");
            var cid = $(this).data("for");
            $.ajax({
               url: baseUrl + "/package/remove-image",
               type: 'post',
               data: {
                  index: cindex,
                  id: cid,
               },
               success: function (data) {
                  if (data === 'false') {
                     console.log(data);
                     typeAlert('Error', 'Sorry, Could not Delete', 'error');
                  } else {
                     location.reload();
                  }
               },
               error: function () {
                  console.log('error');
                  typeAlert('Error', 'Sorry, Server error. Please try again later ', 'error');
               }
            });

         });
      });

      $(function () {
         $('.pkg-imgs').change(function () {
            var files = $(this)[0].files;
            $('#img-count').html(files.length + ' files selected');
            for (var i = 0; i <= files.length - 1; i++) {
               var fname = files.item(i).name;
               var fsize = files.item(i).size;
               document.getElementById('hello').innerHTML =
                     document.getElementById('hello').innerHTML + ', ' +
                     fname + ' (<b>' + fsize + '</b> bytes)';
               console.log(fname);
               console.log(fsize);
            }
         })
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
                  console.log(data);
                  if (data === '') {
                     typeAlert('Error', 'Sorry, Could not open Message', 'error');
                  } else {
                     var a = JSON.parse(data);
                     //message seen or new
                     if ($('[data-for="new"]')) {
                        $('[data-id="id' + a['id'] + '"]').html('<span data-for="seen" class="label label-danger">Seen</span>');
                        $('.message-noti').html($('.message-noti').text()-1);
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
   });
});