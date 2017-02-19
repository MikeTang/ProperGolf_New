// Avoid `console` errors in browsers that lack a console.
(function() {

    video_width = $('.video_box').width();

    video_height = video_width * 0.5623;
    $('.video_box iframe').css("height",video_height+"px");

    // for the sticky right nav
    var topofDiv = 5

    checkIfFixed();

    $(window).scroll(function(){
        checkIfFixed();
    });

    function checkIfFixed () {
        if($(window).scrollTop() > 5){

           $(".navbar-clear").css("background", "#ffffff");
           $('.navbar-brand').css("color","#000");
           $('.slogan').css("color","#000");
           $('.navbar-default.navbar-home .navbar-nav > li > a').css("color","#000");
        }
        else if($(window).scrollTop() < (5)){
           $(".navbar-clear").css("background", "none");
           $('.navbar-brand').css("color","#fff");
           $('.slogan').css("color","#fff");
           $('.navbar-default.navbar-home .navbar-nav > li > a').css("color","#fff");
        }
    }


}());






// Place any jQuery/helper plugins in here.

