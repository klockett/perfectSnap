/**
 * Created by kenlockett1 on 11/28/15.
 */

$().document(function(){



}).mousemove(function(e) {
    var mousex = e.pageX + 20;
    var mousey = e.pageY + 10;
    $('tooltip')
        .css({top:mousey, left: mousex})
});
$(' #tabs p').hide(0).show;

$(' #tabs-nav li').click(function(e) {
    e.preventDefault();
     $(' #tabs p').hide();

     $(' #tabs-nav .current').removeClass("current");
       $(this).addClass('current');
         var clicked = $(this).find('a:first').attr('href');

            $(' #tabs ' + clicked).fadeIn('fast');

}).eq(0).addClass('current');



});

$('.close').on('click', function(event) {
    event.preventDefault();
    $('#overlay')
        .fadeOut()
        .find('#modal')
        .fadeOut();
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.font = "30px Arial";
    ctx.strokeText("Hello World",10,50);

});
window.onload = function() {


    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.font = "30px Arial";
    ctx.strokeText("Hello World",10,50);





}
