$(function ($) {
   "use strict";
   $(document).ready(function () {
      $(function () {
         console.log(city);
         $('#city-autocomplete').autocomplete({
            source: city
         });
      });
      var $body = $('body');
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