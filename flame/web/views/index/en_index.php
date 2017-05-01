<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
	<title>The cloth said language</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?=Html::cssFile('@web/heyaner/css/index.css')?>
</head>
<body>
	<div class="all">
		<div class="top"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'18%'])?><!-- <img src="./img/logoz.jpg"width="8%"> --></div>
		
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
		<h4>1994year</h4>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;Cloth words language first store was established in, near the campus with full-bodied breath of college.Do clothes to wear, this is the designer's initial design idea.If there is a redundant fabrics to do a few things on the store more, waiting for the same be fond of of people bought it.Shop open shelves, like their wardrobe, can arbitrarily.</p>
			<h4>2000year</h4>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;Because the north campus surrounding environment transformation, shop also were forced to move.Cloth cloth language so there is the work shop, located at the worker's stadium across the north gate, is a independent of the second floor.At the beginning of the opening of Boston ivy, now has covered the whole building.Wordless also deeply under the root here.</p>
			<h4>2006year</h4>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;Words, language is the first branch - lido store, located in south gate opposite the tree-lined trail, lido hotel shop behind the beautiful environment of lido park became a part of the store, to lick over a lido store.Even if you don't buy clothes to sit here is a very nice thing to do.</p>
			<h4>2009year</h4>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;Cloth words language, with a second stores - Shanghai store, located next to the Shanghai dramatic arts centre, backyard British old buildings, beautiful scenery is the Shanghai store.</p>
 			<p>&nbsp;&nbsp;&nbsp;&nbsp;19 years quietly grow, cloth cloth language style is more distinct, silently insist on yourself."Heart habitats" this is a customer wrote in the guestbook.Through clothing conveys a way of life - simple, quiet and comfortable……</p>
 			<p>“Everywhere I go, no matter how much I depressed, I tell myself, at least I can go to the store……</p>
 			<p>When the talk…</p>
 			<p>The soul can stop fall in the trees</p>
 			<p>As a little spot</p>
 			<p>Also can not speak quietly</p>
 			<p>Don't be known</p>
 			<p>And my beautiful dress</p>
 			<p>Can mix of weeds and mud</p>
 			<p>In the cycle of eons</p>
 			<p>Not language…</p>
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