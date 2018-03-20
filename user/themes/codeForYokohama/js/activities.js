jQuery(function($) {

  //トップページでSPのときのみ行う調整
  var winW = $(window).width();
  if (750 >= winW) {
    $('#archivesPrev').on('click', function(){
      $('#archivesCont').get(0).scrollTop -= 10;
    });
    $('#archivesNext').on('click', function(){
      $('#archivesCont').get(0).scrollTop += 10;
    });
  }

});
