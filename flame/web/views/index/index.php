<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
	<title>布言布语首页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?=Html::cssFile('@web/heyaner/css/index.css')?>
</head>
<body>
	<div class="all">
		<div class="top"><a href="<?=Url::toRoute('index/index');?>"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'18%'])?></a><!-- <img src="./img/logoz.jpg"width="8%"> --></div>
		
		<div id="div1">
			<ul>
				<?php if(!empty($brand)){foreach($brand as $v){ ?>
		    	<li><a href="<?=$v['url']?>"><img src="<?=$v['brand_pic']?>" /></a></li>
		        <?php  } } ?>
		    </ul>
		    <div id="btn">
		    	<a href="javascript:;" class="active"></a>
		    	<?php for($i=1;$i<count($brand);$i++){ ?>
		        <a href="javascript:;"></a>
		        <?php } ?>
		    </div>
		</div>
		
		<div class="foot"><h2>
			<ul>
				<li><a href="<?=Url::toRoute('clothes/index')?>"><?=Html::img('@web/heyaner/img/clothes.png',['width'=>'40px'])?></a></li>
				<li><a href="<?=Url::toRoute('shop/index')?>"><?=Html::img('@web/heyaner/img/store.png',['width'=>'40px'])?></a></li>
				<li><a href="<?=Url::toRoute('skill/index')?>"><?=Html::img('@web/heyaner/img/skill.png',['width'=>'40px'])?></a></li>
				<li><a href="<?=Url::toRoute('show/index')?>"><?=Html::img('@web/heyaner/img/show.png',['width'=>'40px'])?></a></li>
				<li><a href="<?=Url::toRoute('since/index')?>">1994</a></li>
			</ul></h2>
		</div>
	</div>
	<!-- 手机显示部分开始 -->
	<div class="sj_xian">
		<h3>手艺</h3>
		<div class="shou">
			<?php if(!empty($skill)){ foreach($skill as $v){ ?>
			<div class="shouyi"><a href="<?=Url::toRoute('skill/detail',array('id'=>$v['id']));?>"><img src="<?=$v['pic']?>"></a></div>
			<?php } } ?>
		</div>
		<h3>Since1994</h3>
		<div>
		<h4>1994年</h4>
			<p>布言布语第一家店成立于，位于学院气息浓郁的北大校园附近。做衣服给自己穿，这是设计师最初的设计想法。如果有多余的面料就多做几件挂到店里，等待有同样喜好的人把它买走。小店开放式的货架，像自己家的衣橱一样的，可以随意翻开。</p>
			<h4>2000年</h4>
			<p>因为北大校园周边环境改造，小店也被迫搬迁。布言布语因此有了工体店，位于工人体育场北门对面，是一幢独立的二层楼。开店之初种下的爬山虎，现在已经爬满了整幢楼。不言不语也在这里深深的扎下了根。</p>
			<h4>2006年</h4>
			<p>布言布语有了第一家分店---丽都店，位于丽都饭店南门对面的林荫小道内，店后面环境优美的丽都公园成了店面装饰的一部分，为丽都店舔色不少。即使不买衣服到这里坐坐也是件很惬意的事。</p>
			<h4>2009年</h4>
			<p>布言布语有了第二家分店---上海店，位于上海话剧艺术中心旁边，后院的英式老建筑，是上海店一道亮丽的风景。</p>
 			<p>19年静静地成长，布言布语的风格更加鲜明，默默的坚持自己。“心灵栖息之地”这是一位顾客在留言本上所写的。通过衣服传达了一种生活方式---素朴、宁静、自在……</p>
 			<p>“无论我走到哪里，无论我多沮丧，我告诉自己，我至少可以去小店……</p>
 			<p>倾诉时…</p>
 			<p>灵魂可以停落在树梢</p>
 			<p>象一点光斑闪耀</p>
 			<p>也可以不言的悄然飞过</p>
 			<p>不被人知道</p>
 			<p>而我美丽的衣裳</p>
 			<p>会拌着荒草与泥土</p>
 			<p>在万古的轮回中</p>
 			<p>不语…</p>
		</div>
		<div style="height:80px;"></div>
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
	<!-- 手机显示部分结束 -->
	<?=Html::jsFile('@web/heyaner/js/jquery-1.8.3.min.js')?>
	<?=Html::jsFile('@web/heyaner/js/move.js')?>
	<script>

	window.onload = function(){
		var oDiv = document.getElementById('div1');
		var oUl = oDiv.getElementsByTagName('ul')[0];
		var aLi = oUl.getElementsByTagName('li');
		var aImg = oUl.getElementsByTagName('img');
		
		var oBtn = document.getElementById('btn');
		var aA = oBtn.getElementsByTagName('a');
		
		var imgWidth = 1000;
		var iNow = 0;
		var iNow2 = 0;
		
		oUl.style.width = aImg.length * imgWidth + 'px';
		
		function toReSize(){
			
			// var veiwWidth = document.documentElement.clientWidth;
			var veiwWidth = oDiv.width;
			
			if(veiwWidth>1000){
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
		
		
		setInterval(toRun,8000);
		
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