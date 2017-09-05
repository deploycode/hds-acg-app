$(document).ready(function(){
  var flag = false;
  var scroll;
  var alto = window.innerHeight;
  $(window).scroll(function(){
    scroll = $(window).scrollTop();
    if((scroll > alto) && (screen.width>768)){
      if(!flag){
        $(".menu-third").addClass('navbar-fixed-top');
        flag = true;
      }
    }else{
      if(flag){
        $(".menu-third").removeClass('navbar-fixed-top');
        flag = false;
      }
    }
  });
  $('#subir').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 1000);
	});
	$('#scrollspy a').click(function(){
			$('#menu').removeClass('in');
	});
});
$(document).ready(function(){
  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();
    if((scroll > 500) && (screen.width>768)){
      if(!flag){
        $("#indicador").css({"display": "none"});
        flag = true;
      }
    }else{
      if(flag){
        $("#indicador").css({"display": "block"});
        flag = false;
      }
    }
  });
});
