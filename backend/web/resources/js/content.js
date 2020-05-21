$(function () {

   $('.add-categories').on('click', function () {
      alert('ok')

      $('#modal-section-categories').modal('open');
   });


   // Initialize modal
   // var modal = $('#modal-section-categories');
   // modal.modal().open();


   // Trigger Add Section
   $('.add-section').on('click', function () {
      var type = $(this).data('type');
      var page = $('.content-editor').data('page');
      var contents = $('.content-section-wrapper');
      var content = $('.content-section');
      console.log(type);
      console.log(page);
   });
});