jQuery(function($) {

  $('.menu_icon').on('click', function() {
    $('.menu_item_box').slideToggle();
    $(this).toggleClass("active");
  })

  $('.members_info').on('click', function() {
    var targetId = $(this).attr('id');
    var targetBox = $(this).parents('.members_list').data('target-box-id');

    if ($('*[data-box-id="' + targetBox + '"]').hasClass('isOpen')) {
      $('*[data-box-id="' + targetBox + '"]').slideUp(300).removeClass('isOpen');
    } else {
      $('.isOpen').slideUp(300).removeClass('isOpen');
      window.setTimeout(function() {
        console.log($('#members_detail-' + targetId));
        $('*[data-box-id="' + targetBox + '"]')
          .html($('#members_detail-' + targetId))
          .slideDown(300).addClass('isOpen');
      }, 500);
    }
  })
});
