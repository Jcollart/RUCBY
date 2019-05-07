$(document).ready(function(){
  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 800) {
        $("nav").css("opacity" , "1");
      }

      else if (scroll < 1) {
        $("nav").css("opacity" , "1");
      }

      else{
          $("nav").css("opacity" , "0.8");
      }
  })
})
