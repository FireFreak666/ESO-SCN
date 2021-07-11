$('input[Name=Ctel]').mask("+7 (999) 999-99-99");

$('form').submit(function(e){
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "mailer/smart.php",
    data: $(this).serialize()
  }).done(function() {
    $(this).find("input").val("");
    $('#consult').fadeOut(50);
    $('.overlay, #confirmed').fadeIn(200);
    $('form').trigger('reset')
  })
  return false;
});


document.addEventListener('DOMContentLoaded', function() {
  var elms = document.querySelectorAll('.slider');
  for (var i = 0, len = elms.length; i < len; i++) {
    // инициализация elms[i] в качестве слайдера
    new ChiefSlider(elms[i]);
  }
});


$('.modal__close').on('click',function(){
  $('.overlay, #consult, #confirmed').fadeOut(50);
});
//Consult
$('[data-modal=consult]').on('click',function(){
  $('.overlay, #consult').fadeIn(200);
});


$(window).scroll(function(){
  if ($(this).scrollTop() > 1600) {
    $('.pageup').fadeIn(500);
  } else {
    $('.pageup').fadeOut(500);
  }
});

// $('#go_up').click(function(){
//   let _href = '#up';
//   $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
//   return false;
// })

// new WOW().init();