$(document).ready(
  function() {

    resetShow();

    $('.menu a').on("click",function(){
      var href = $(this).attr('href');
      $('.touch').hide();
      if ($(href).is(':visible')) {
        $(href).hide();
        $('.touch').show();
      } else {
        resetShow();
        $(href).show();
        $('.touch').hide();
      }
    })

});


function resetShow(){
  $('.touch').show();
  $('#page1').hide();
  $('#page2').hide();
  $('#page3').hide();
  $('#page4').hide();
  $('#page5').hide();
  $('#page6').hide();

}
