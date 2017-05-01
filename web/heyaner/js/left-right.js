/***
*blog mysweet95.com
*author 胡来
*/
$(function(){
	
	time = 10;
	//小人可运行的长度
	var logo = document.getElementById('logo');
	long = $('.foot_logo').width()-$('#logo').width();
	
	function right(){
		var speed = 1;
		aaa = logo.offsetLeft;
		if(aaa>long){
			clearInterval(timer);
			timer = setInterval(left,time);
		}
		logo.style.left = logo.offsetLeft+speed+'px';
	}
	function left(){
		var speed = -1;
		aaa = logo.offsetLeft;
		if(aaa<0){
			clearInterval(timer);
			timer = setInterval(right,time);
		}
		logo.style.left = logo.offsetLeft+speed+'px';
	}

	timer = setInterval(right,time);

});