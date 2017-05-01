$(document).ready(function(){
	$('#click').toggle(function(){
		// if(lang=='en'){
		// 	$(this).text('pack up');
		// }else if(lang=='zh-CN'){
			$(this).text('-^-');
		// }
		
		$('#hidden_menu').show(1000);
		$(this).css('top','350px');
	},function(){
		// if(lang == 'en'){
		// 	$(this).text('MENU');
		// }else if(lang=='zh-CN'){
			$(this).text('三');
		// }
		$(this).css('top','0px');
		$('#hidden_menu').hide(1000);
	});
});