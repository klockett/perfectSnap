/**
 * Created by kenlockett1 on 2/25/16.
 */
window.onload = function() {
    if (Modernizr.canvas) {
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        ctx.font = "30px Arial ";
        ctx.strokeStyle = "green";

        ctx.strokeText("Eco1 Video", 10, 50);

        var c = document.getElementById("myCanvas1");
        var ctx = c.getContext("2d");
        ctx.font = "30px Arial ";
        ctx.strokeStyle = "green";

        ctx.strokeText("Eco1 Gallery", 10, 50);


    }



}





console.log(Modernizr);