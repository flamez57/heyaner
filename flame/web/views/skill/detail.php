<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
	<title>布言布语</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?=Html::cssFile('@web/heyaner/css/public.css');?>
	<?=Html::cssFile('@web/heyaner/css/slick.css',['rel'=>'stylesheet prefetch']);?>
	<?=Html::cssFile('@web/heyaner/css/skill.css');?>
</head>
<body>
	<!-- 头部导航开始 -->
	<div class="tops"><a href="<?=Url::toRoute('index/index');?>"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'18%'])?></a><!-- <img src="./img/logoz.jpg"width="8%"> --><hr></div>
	<div class="top">
		<div class="fl kuan1">
			<div class="fl kuan2"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'85%','style'=>'margin:0 20px']);?></div>
			<div class="fanyi"><a href="<?php echo Yii::$app->urlManager->createUrl(['/home/lang/language','lang'=>'zh-CN']);?>">中文</a>|<a href="<?php echo Yii::$app->urlManager->createUrl(['/home/lang/language','lang'=>'en']);?>">English</a></div>
		</div>
		<div class="fl kuan1">
			<div class="fl kuan2 menu">
				<div class="hidden_menu" id="hidden_menu">
					<ul>
						<li>-</li>
						<li><a href="<?=Url::toRoute('index/index')?>"><?=Html::img('@web/heyaner/img/index.png')?></a></li>
				        <li><a href="<?=Url::toRoute('clothes/index')?>"><?=Html::img('@web/heyaner/img/clothes.png')?></a></li>
				        <li><a href="<?=Url::toRoute('shop/index')?>"><?=Html::img('@web/heyaner/img/store.png')?></a></li>
				        <li><a href="<?=Url::toRoute('skill/index')?>"><?=Html::img('@web/heyaner/img/skill.png')?></a></li>
				        <li><a href="<?=Url::toRoute('show/index')?>"><?=Html::img('@web/heyaner/img/show.png')?></a></li>
				        <li><a href="<?=Url::toRoute('since/index')?>">1994</a></li>
					</ul>
				</div>
				<a href=""id="click">三</a>
			</div>
			<div class="fl title"><h1><a href="<?=Url::toRoute('skill/index')?>"><?=Html::img('@web/heyaner/img/skill.png')?></a></h1></div>
		</div><hr>
	</div>
	<div id="sj_menu">
	    <ul>
	        <li><a href="<?=Url::toRoute('index/index')?>"><?=Html::img('@web/heyaner/img/index.png')?></a></li>
	        <li><a href="<?=Url::toRoute('clothes/index')?>"><?=Html::img('@web/heyaner/img/clothes.png')?></a></li>
	        <li><a href="<?=Url::toRoute('shop/index')?>"><?=Html::img('@web/heyaner/img/store.png')?></a></li>
	        <li><a href="<?=Url::toRoute('skill/index')?>"><?=Html::img('@web/heyaner/img/skill.png')?></a></li>
	        <li><a href="<?=Url::toRoute('show/index')?>"><?=Html::img('@web/heyaner/img/show.png')?></a></li>
	        <li><a href="<?=Url::toRoute('collect/index')?>"><?=Html::img('@web/heyaner/img/show.png')?></a></li>
	        .
	    </ul>
	</div>
	<!-- 头部结束 -->

	<!-- 内容部分开始 -->
	<div class="content" style="width:70%">
		<div class="shouyi_list"><!-- 
			<a href="<?=Url::toRoute(['skill/detail','fid'=>1])?>">手艺</a>
			<a href="<?=Url::toRoute(['skill/detail','fid'=>2])?>">手艺活动</a>
			<a href="<?=Url::toRoute(['skill/detail','fid'=>3])?>">手艺人</a> -->
			<a style="float:right;"href="<?=Url::toRoute(['skill/indexs','fid'=>$_GET['fid']])?>">更多</a>
		</div>
		<div class="slide-container">
			<?php if(!empty($skill)){ foreach($skill as $v){ ?>
			<div class="wrapper">
				<div class="clash-card barbarian">
				  	<div class="clash-left">
						<img src="<?=$v['pic']?>" alt="" />
				  	</div>
				 	<div class="clash-right">
				  		<div class="clash-card__unit-name">手艺</div>
					  	<table>
						  	<tr>
						  		<td>工艺：</td>
						  		<td><?=$v['skill']?></td>
						  	</tr>
						  	<tr>
						  		<td>种类：</td>
						  		<td><?=$v['kind']?></td>
						  	</tr>
						  	<tr>
						  		<td>用途：</td>
						  		<td><?=$v['use']?></td>
						  	</tr>
						  	<tr>
						  		<td>简介：</td>
						  		<td><?=$v['intro']?></td>
						  	</tr>
					  	</table>
				  	</div>
				</div> <!-- end clash-card barbarian-->
			</div> <!-- end wrapper -->
			<?php }} if(!empty($skillart)){ foreach($skillart as $v){ ?>
			<div class="wrapper">
				<div class="clash-card barbarian">
				  	<div class="clash-left">
						<img src="<?=$v['pic']?>" alt="" />
				  	</div>
				 	<div class="clash-right">
				  		<div class="clash-card__unit-name">手艺活动</div>
					  	<table>
						  	<tr>
						  		<td>活动主题：</td>
						  		<td><?=$v['title']?></td>
						  	</tr>
						  	<tr>
						  		<td>活动时间：</td>
						  		<td><?=$v['art_time']?></td>
						  	</tr>
						  	<tr>
						  		<td>活动地点：</td>
						  		<td><?=$v['art_address']?></td>
						  	</tr>
						  	<tr>
						  		<td>活动简介：</td>
						  		<td><?=$v['art_intro']?></td>
						  	</tr>
					  	</table>
				  	</div>
				</div> <!-- end clash-card barbarian-->
			</div> <!-- end wrapper -->
			<?php }} if(!empty($skiller)){ foreach($skiller as $v){ ?>
			<div class="wrapper">
				<div class="clash-card barbarian">
				  	<div class="clash-left">
						<img src="<?=$v['pic']?>" alt="" />
				  	</div>
				 	<div class="clash-right">
				  		<div class="clash-card__unit-name">手艺人</div>
					  	<table>
						  	<tr>
						  		<td>姓名：</td>
						  		<td><?=$v['name']?></td>
						  	</tr>
						  	<tr>
						  		<td>技术：</td>
						  		<td><?=$v['skill']?></td>
						  	</tr>
						  	<tr>
						  		<td>工龄：</td>
						  		<td><?=$v['workage']?></td>
						  	</tr>
						  	<tr>
						  		<td>个人简介：</td>
						  		<td><?=$v['intro']?></td>
						  	</tr>
					  	</table>
				  	</div>
				</div> <!-- end clash-card barbarian-->
			</div> <!-- end wrapper -->
			<?php }} ?>
		</div> <!-- end container -->
	</div>
	<!-- 内容结束 -->

	<!-- 公共尾部开始 -->
	<div class="foot">
	<hr>
		<table>
			<tr>
				<!-- <td><a href="<?=Url::toRoute('index/index');?>"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'90%'])?></a><img src="./img/logoz.jpg"width="20%"> </td> -->
				<td><?=Html::img('@web/heyaner/img/weixin.png',['width'=>'30%'])?></td>
				<td><?=Yii::$app->params['beian']?></td>
			</tr>
			
		</table>
	</div>
	<!-- 公共尾结束 -->
	<?=Html::jsFile('@web/heyaner/js/jquery-1.8.3.min.js');?>
	<?=Html::jsFile('@web/heyaner/js/menu.js');?>
	<?=Html::jsFile('@web/heyaner/js/slick.min.js');?>
	<script type="text/javascript">
	(function() {

	  var slideContainer = $('.slide-container');
	  
	  slideContainer.slick();
	  
	  $('.clash-card__image img').hide();
	  $('.slick-active').find('.clash-card img').fadeIn(200);
	  
	  // On before slide change
	  slideContainer.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
		$('.slick-active').find('.clash-card img').fadeOut(1000);
	  });
	  
	  // On after slide change
	  slideContainer.on('afterChange', function(event, slick, currentSlide) {
		$('.slick-active').find('.clash-card img').fadeIn(200);
	  });
	  
	})();
	</script>
	<?=Html::jsFile('@web/heyaner/js/move.js');?>
	<script>

	window.onload = function(){
		var oDiv = document.getElementById('div1');
		var oUl = oDiv.getElementsByTagName('ul')[0];
		var aLi = oUl.getElementsByTagName('li');
		var aImg = oUl.getElementsByTagName('img');
		
		var oBtn = document.getElementById('btn');
		var aA = oBtn.getElementsByTagName('a');
		
		var imgWidth = 1200;
		var iNow = 0;
		var iNow2 = 0;
		
		oUl.style.width = aImg.length * imgWidth + 'px';
		
		function toReSize(){
			
			// var veiwWidth = document.documentElement.clientWidth;
			var veiwWidth = oDiv.width;
			
			if(veiwWidth>1200){
				for(var i=0;i<aImg.length;i++){
					aImg[i].style.left = - (imgWidth - veiwWidth)/2 + 'px';
				}
			}
		
		}
		
		toReSize();
		
		window.onresize = function(){
			toReSize();
		};
		
		
		for(var i=0;i<aA.length;i++){
			aA[i].index = i;
			aA[i].onclick = function(){
			
				for(var i=0;i<aA.length;i++){
					aA[i].className = '';
				}
				this.className = 'active';
				
				startMove(oUl,{left : - this.index * imgWidth});
			
			};
		}
		
		
		setInterval(toRun,5000);
		
		function toRun(){
		
			if(iNow == aLi.length-1){
				aLi[0].style.position = 'relative';
				aLi[0].style.left = aLi.length * imgWidth + 'px';
				iNow = 0;
			}
			else{
				iNow++;
			}
			
			iNow2++;
			
			for(var i=0;i<aA.length;i++){
				aA[i].className = '';
			}
			
			aA[iNow].className = 'active';
			
			startMove(oUl,{left : - iNow2 * imgWidth},function(){
			
				if(iNow==0){
					aLi[0].style.position = 'static';
					oUl.style.left = 0;
					iNow2 = 0;
				}
			
			});
			
		}
		
	};

	</script>
</body>
</html>