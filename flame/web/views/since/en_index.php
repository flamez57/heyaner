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
	<?=Html::cssFile('@web/heyaner/css/public.css');?>
	<?=Html::cssFile('@web/heyaner/css/since.css');?>
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
			<div class="fl title"><h1><a href="<?=Url::toRoute('since/index')?>">1994</a></h1></div>
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
	<div class="content">
		<div class="thing_list">
			<h3 id="thing">Notices</h3>
			<ul class="thing_biao">
				<?php if(!empty($since)){ foreach($since as $v){ ?>
				<li>
					<h4><?=$v['title']?></h4>
					<ul>
						<li><?=$v['content']?></li>
					</ul>
				</li>
				<?php }} ?>
			</ul>
		</div>
		<h3>Since1994</h3>
		<div class="wenzhang">
			<?php if(!empty($sincez)){ foreach($sincez as $v){ ?>
				
			<h4><?=$v['title']?></h4>
			<p><?=$v['content']?></p>
				
			<?php }} ?>
		</div>
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
	<script type="text/javascript">
		var timer = null;
		$('#thing,.thing_biao h4').mouseover(function(){
			clearInterval(timer);
			$('.thing_biao').css('display','block');
		});
		$('#thing,.thing_biao h4').mouseout(function(){
			timer = setTimeout(function(){
				$('.thing_biao').css('display','none')
			},2000)
		});
		$('.thing_biao h4').mouseover(function(){
			// $(this).parents('ul').css('display','block');
			$(this).siblings('ul').css('display','block');
		});
		$('.thing_biao h4').mouseout(function(){
			$(this).siblings('ul').css('display','none');
		})
	</script>
</body>
</html>