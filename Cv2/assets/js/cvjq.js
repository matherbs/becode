$(document).ready(
  function() {

    $('.touch').show();
    $('.page1').hide();
    $('.page2').hide();

      if ($('.page1').is(':hidden')) {
            $('.menu1').click(function() {
              $('.page1').show();
              $('.touch').hide();
            });
          }else {
            $('.menu1').click(function() {
              $('.page1').hide();
              $('.touch').show();
          });
        };
      });
