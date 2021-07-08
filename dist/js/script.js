$('input[Name=Ctel]').mask("+7 (999) 999-99-99");

$('form').submit(function(e){
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "mailer/smart.php",
    data: $(this).serialize()
  }).done(function() {
    $(this).find("input").val("");
    $('#consultation, #ordering').fadeOut(50);
    $('.overlay, #confirmed').fadeIn(200);
    $('form').trigger('reset')
  })
  return false;
});