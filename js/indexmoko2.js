$('.base').clone().addClass('overlay').appendTo('.landing');
$('.cta').hover(function() {
  $('.overlay').toggleClass('over');
});
$('.cta').click(function() {
  $('.buts').trigger("click");
});
/*--------------------
Codepen Preview Tile
--------------------*/
