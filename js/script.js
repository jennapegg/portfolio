$(document).ready(function() {
  const $gallery = $('.gallery');
  const $show = $('.show');

  $show.hide();

  $gallery.hover(function() {
    $(this).find($show).toggle();
  })

});//end of doc.ready
