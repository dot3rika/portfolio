  //ハンバーガーメニュー
  $(function(){
	 $("#btn").on("click", function () {
      $('body').toggleClass('is_active');
      $('.dotline2').toggleClass('is_active');
	 });
  });


  
  /*

  $(function() {
    var video = document.getElementById('video');
        video.addEventListener("ended", function() {
        // VIDEOたぐけして、もともとのbgimageかくjsしより
    });
});

  */
 