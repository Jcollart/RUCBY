$(document).ready(function(){
  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 700) {
        $("nav").css("opacity" , "1");
      }

      else if (scroll === 0) {
        $("nav").css("opacity" , "1");
      }

      else{
          $("nav").css("opacity" , "0.8");
      }
  })
})
