jQuery(function($) {

  $('.menu_icon').on('click', function() {
    $('.menu_item_box').slideToggle();
    $(this).toggleClass("active");
  })

  $('.members_info').on('click', function() {
    var targetId = $(this).attr('id');
    var targetBox = $(this).parents('.members_list').data('target-box-id');
    var currentOpen = $('.members_detail_box.isOpen > .members_detail_content').attr('id');

    if (currentOpen === undefined) {
      $('*[data-box-id="' + targetBox + '"]')
        .html($('#members_detail-' + targetId).clone())
        .slideDown(300).addClass('isOpen');
    } else {
      $('.members_detail_box.isOpen').slideUp(300).removeClass('isOpen');
      if (targetId !== currentOpen.replace(/^members_detail-/g, '')) {
        $('.members_detail_box.isOpen').slideUp(300).removeClass('isOpen');
        window.setTimeout(function() {
          $('*[data-box-id="' + targetBox + '"]')
            .html($('#members_detail-' + targetId).clone())
            .slideDown(300).addClass('isOpen');
        }, 500);
      }
    }
  })
});
