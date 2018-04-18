$(function ($) {

  //トップページでSPのときのみ行う調整
  var winW = $(window).width()
  if (750 >= winW) {

    //SPのMVの高さ調整
    var winH = $(window).height()
    var headerH = $('.header_box_sp').height()
    var mvH = $('.main_visual_typo_sp').height()
    var mvTop = (winH - headerH) / 2 + mvH / 2
    $('#mainVisual').css('height', winH + 'px')
    $('.main_visual_typo_sp').css('top', mvTop + 'px')

    // //#memberのスライダー
    // $('#lightSlider').lightSlider({
    //   item:2,
    //   loop:true,
    //   slideMove:2,
    //   easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
    //   speed:600
    // });

  }
})
