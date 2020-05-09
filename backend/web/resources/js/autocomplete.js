$(function ($) {
   "use strict";
   $(document).ready(function () {
      $(function () {
         $('#city-autocomplete').autocomplete({
            source: city
         });
      });
      var $body = $('body');
      $(function () {
         if ($body.find('.package-form').length > 0) {
            $(function () {
               $('#city-autocomplete').autocomplete({
                  source: city
               });
            });
         }
      });


   });
});