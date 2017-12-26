jQuery(function($) {

  $('.menu_icon').on('click',function(){
    $('.menu_item_box').slideToggle();
    $(this).toggleClass("active");
  })
});
