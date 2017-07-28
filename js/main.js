$(document).ready(function(){
	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 200){
			if(!flag){
				$("header class=""").html({"margin-top": "30px", "width": "120px","height":"auto"});
				flag = true;
			}
		}else{
			if(flag){
				$("header class="fixed"").html({"margin-top": "60px", "width": "120px","height":"auto"});


				flag = false;
			}
		}


	});

});