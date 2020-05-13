$(function ($) {
   "use strict";
   $(document).ready(function () {
      console.log(city);
      $(function () {
         $('#city-autocomplete').autocomplete({
            data: city,
         });
      });
      // var $body = $('body');
      // $(function () {
      //    if ($body.find('.package-form').length > 0) {
      //       $(function () {
      //          $('#city-autocomplete').autocomplete({
      //             source: city
      //          });
      //       });
      //    }
      // });


   });
});