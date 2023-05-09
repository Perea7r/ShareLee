import './bootstrap';
import jQuery from 'jquery';
window.$ = jQuery;

$(document).ready(function() {
    $('#search').click(function() {
      $('#dropdown').show();
    });

    $(document).click(function(event) {
      if (!$(event.target).closest('#dropdown').length && !$(event.target).is('#search')) {
        $('#dropdown').hide();
      }
    });
  });
