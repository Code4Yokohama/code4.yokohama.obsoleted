$(function(){

    //bxslider
    $('.bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        controls: true,
        speed:  1000,
        pause:  5000,
        easing: 'ease-in-out'
    });

    //ページ内リンク
    function inpageLink() {
        $('a[href^=#]').click(function (e) {
            e.preventDefault();
            var speed = 500;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;

            $("html, body").animate({scrollTop: position}, speed, "swing");
            return false;
        });
    }

    //読み込み完了後に実行
    inpageLink();

});
