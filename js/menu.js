$(document).ready(function(){
	$('#click').toggle(function(){
		$(this).text('收起');
		$('#hidden_menu').show(1000);
		$(this).css('top','350px');
	},function(){
		$(this).text('菜单');
		$(this).css('top','0px');
		$('#hidden_menu').hide(1000);
	});
});