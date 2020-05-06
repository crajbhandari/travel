$(function ($) {
   "use strict";
   $(document).ready(function () {

      $(function () {
         $('#city-autocomplete').autocomplete({
            source: city
         });
      });

   });
});