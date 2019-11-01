$(document).ready(function() {
	$(window).scroll(function() {
		for(var i = 1;i<=4;i++){
			$("#banner div")[i].style.transform = 'translateY('+$(this).scrollTop()/(i+i+1)+'px)'	
		}
		if($(this).scrollTop()>=$(window).height()/2){
			$("#spybar").slideDown();
		}else if ($(this).scrollTop()<$(window).height()/2) {
			$("#spybar").slideUp();
			$('.menu a').removeClass('activebtn');
		}
		
		spyBar('#profile');
		spyBar('#experience');
		spyBar('#abilitie');
		spyBar('#projects');
	});

	function spyBar(id){
		if($(this).scrollTop()+1 >= $(id).offset().top){
			$('.menu a').removeClass('activebtn');
			$("[href='"+id+"']").addClass('activebtn');
		}
	}
});