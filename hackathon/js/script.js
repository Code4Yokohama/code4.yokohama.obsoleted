$(function(){

    var winW = window.innerWidth,
        winH = window.innerHeight;

    //bxslider
    $('.bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        controls: true,
        pager: true,
        speed:  1000,
        pause:  5000,
        easing: 'ease-in-out'
    });

    //fixKvSize(winW,winH);

    /*$(window).resize(function(){
        var winW = window.innerWidth;
        fixKvSize(winW,winH);
    });*/

});

/*function fixKvSize(winW,winH){

    $('.bx-viewport, .bx-wrapper, .bxslider, .bxslider li').css({
        'height': winH
    });

}*/
