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
	<?=Html::cssFile('@web/heyaner/css/public.css')?>
	<?=Html::cssFile('@web/heyaner/css/clothes.css')?>
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
			<div class="fl title"><h1><a href="<?=Url::toRoute('collect/index')?>"><?=Html::img('@web/heyaner/img/show.png')?></a></h1></div>
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
	<div class="content"style="position:relative;">
		<div style="position:absolute;top:-50px;right:0px">
			<a href="<?=Url::toRoute(['collect/index','sid'=>'衣'])?>">衣</a> <a href="">|</a>
			<a href="<?=Url::toRoute(['collect/index','sid'=>'裤'])?>">裤</a> <a href="">|</a>
			<a href="<?=Url::toRoute(['collect/index','sid'=>'裙'])?>">裙</a> <a href="">|</a>
			<a href="<?=Url::toRoute(['collect/index','sid'=>'鞋'])?>">鞋</a> <a href="">|</a>
			<a href="<?=Url::toRoute(['collect/index','sid'=>'帽'])?>">帽</a> <a href="">|</a>
			<a href="<?=Url::toRoute(['collect/index','sid'=>'配'])?>">配件</a> <a href="">|</a>
			<a href="<?=Url::toRoute(['collect/index','sid'=>'其他'])?>">其它</a>
		</div>
		<div class="coats">
			<?php if(!empty($collect)){ foreach($collect as $v){ ?>
			<div class="coat">
				<a href="<?=Url::toRoute(['collect/detail','id'=>$v['id']])?>"><img src="<?=$v['pic']?>"></a>
			</div>
			<?php } } ?>

		</div>
		<div class="pages">
			<div class="page">
				<a href="<?=Url::toRoute(['collect/index','p'=>1,'sid'=>isset($_GET['sid'])?$_GET['sid']:''])?>">1</a>
				<a href="<?=Url::toRoute(['collect/index','p'=>2,'sid'=>isset($_GET['sid'])?$_GET['sid']:''])?>">2</a>
				<a href="<?=Url::toRoute(['collect/index','p'=>3,'sid'=>isset($_GET['sid'])?$_GET['sid']:''])?>">3</a>
				<a href="<?=Url::toRoute(['collect/index','p'=>4,'sid'=>isset($_GET['sid'])?$_GET['sid']:''])?>">4</a>
				<a href="<?=Url::toRoute(['collect/index','p'=>5,'sid'=>isset($_GET['sid'])?$_GET['sid']:''])?>">5</a>
			</div>
		</div>		
	</div>
	<div class="jianjv"></div>
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
</body>
</html>