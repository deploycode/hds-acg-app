$(document).ready(function(){
  var flag = false;
  var scroll;
  var alto = screen.height - 100;

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
