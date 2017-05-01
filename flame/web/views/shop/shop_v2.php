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
	<?=Html::cssFile('@web/heyaner/css/shop.css');?>
</head>
<body>
	<!-- 头部导航开始 -->
	<div class="tops"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'18%']);?><!-- <img src="./img/logoz.jpg"width="8%"> --><hr></div>
	<div class="top">
		<div class="fl kuan1">
			<div class="fl kuan2"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'85%','style'=>'margin:0 20px']);?></div>
			<div class="fanyi"><a href="">中文</a>|<a href="">English</a></div>
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
			<div class="fl title"><h1><a href="<?=Url::toRoute('shop/index')?>"><?=Html::img('@web/heyaner/img/store.png')?></a></h1></div>
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
		<div class="dian">
			<?php if(!empty($shop)){ foreach($shop as $v){ ?>
			--><a href="<?=Url::toRoute(['shop/detail','id'=>$v['id']])?>"><?=$v['store']?></a>
			<?php }} ?>
		</div>
		<div class="shop_top">
			<div class="shop_left">
				<img src="<?=$shopz['store_pic']?>">
				<table>
					<tr>
						<td>店铺地址：</td>
						<td><?=$shopz['address']?></td>
					</tr>
					<tr>
						<td>联系方式：</td>
						<td><?=$shopz['phone']?></td>
					</tr>
					<tr>
						<td>营业时间：</td>
						<td><?=$shopz['shop_time']?></td>
					</tr>
				</table>
			</div>
			<div class="shop_right">
				<table>				
					<tr>
						<td>简单介绍：</td>
						<td><?=$shopz['intro']?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="boot" id="boot">
			<div class="shop_boot">
				<ul>
					<?php if(!empty($shophoto)){ foreach($shophoto as $v){ ?>
					<li><a href=""><img src="<?=$v['photo']?>"></a></li>
					<?php }} ?>
				</ul>
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
	<?=Html::jsFile('@web/heyaner/js/gundong.js');?>
	<script type="text/javascript">
		// $('.shop_boot img')[0].click(function(){
			// alert($(this).src);
			// $(.shop_left img).attr('src',$(this).src);
		// });
	</script>
</body>
</html>