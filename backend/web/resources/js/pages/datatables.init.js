$(document).ready(function () {
   $("#datatable-buttons, .datatable-buttons").DataTable({
      lengthChange: !1,
      buttons: ["copy", "excel", "pdf", "colvis"]
   }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")

   $("#datatable, .datatable").DataTable({
      lengthChange: !1,
   });




});