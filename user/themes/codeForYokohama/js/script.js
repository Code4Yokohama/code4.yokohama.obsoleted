jQuery(function($) {

  $('.menu_icon').on('click', function() {
    $('.menu_item_box').slideToggle();
    $(this).toggleClass("active");
  })

  $('.members_info').on('click', function() {
    var targetId = $(this).attr('id');
    var targetBox = $(this).parents('.members_list').data('target-box-id');
    console.log(targetBox);
    // TODO: クリックしたときにどこのdetail_boxに表示させるのか書く！！！
    // TODO: 隠しBox(members_detail_content)をdetail_boxにコピーする
    // TODO: 閉じるボタンでDetailを閉じる

    // if ($('#members_detail-' + targetId).hasClass('isOpen')) {
    //   $('#members_detail-' + targetId).slideUp(300).removeClass('isOpen');
    // } else {
    //   $('.isOpen').slideUp(300).removeClass('isOpen');
    //   window.setTimeout(function() {
    //     $('#members_detail-' + targetId).slideDown(300).addClass('isOpen');
    //   }, 500);
    // }
  })
});
