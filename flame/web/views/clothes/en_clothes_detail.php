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
	<?=Html::cssFile('@web/heyaner/css/public.css')?>
	<?=Html::cssFile('@web/heyaner/css/clothesphoto.css')?>
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
			<div class="fl title"><h1><a href="<?=Url::toRoute('clothes/index')?>"><?=Html::img('@web/heyaner/img/clothes.png')?></a></h1></div>
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
		<div class="coats">
			<?php if(!empty($clothes)){ ?>
			<table border="0">
				<tr>
					<td colspan="3"rowspan="3"><img id="img"src="<?=$clothes['cloth_pic']?>"></td>
					<td style="position:relative;"><?=Html::img('@web/heyaner/img/sweet.jpg',['class'=>'imgsz'])?>
						<table id='table1'>
							<tr>
								<td>cloth name：</td>
								<td><?=$clothes['cloth_name']?></td>
								<td>model：</td>
								<td><?=$clothes['model']?></td>
							</tr>
							<tr>
								<td>material：</td>
								<td><?=$clothes['material']?></td>
								<td>fashion：</td>
								<td><?=$clothes['fashion']?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td><img class="imgs" src="<?=empty($clothesphoto[1]['photo'])?$clothes['cloth_pic']:$clothesphoto[1]['photo'];?>"></td>
				</tr>
				<tr>
					<td><img class="imgs" src="<?=empty($clothesphoto[2]['photo'])?$clothes['cloth_pic']:$clothesphoto[2]['photo'];?>"></td>
				</tr>
				<tr>
					<td><img class="imgs" src="<?=empty($clothesphoto[3]['photo'])?$clothes['cloth_pic']:$clothesphoto[3]['photo'];?>"></td>
					<td><img class="imgs" src="<?=empty($clothesphoto[4]['photo'])?$clothes['cloth_pic']:$clothesphoto[4]['photo'];?>"></td>
					<td><img class="imgs" src="<?=empty($clothesphoto[5]['photo'])?$clothes['cloth_pic']:$clothesphoto[5]['photo'];?>"></td>
					<td><img class="imgs" src="<?=empty($clothesphoto[6]['photo'])?$clothes['cloth_pic']:$clothesphoto[6]['photo'];?>"></td>
				</tr>
			</table>
			<?php }?>
		</div>
		<div class="tbl">
			
			<table id="table2">
				<tr>
					<td>cloth name：</td>
					<td><?=$clothes['cloth_name']?></td>
				</tr>
				<tr>
					<td>model：</td>
					<td><?=$clothes['model']?></td>
				</tr>
				<tr>
					<td>material：</td>
					<td><?=$clothes['material']?></td>
				</tr>
				<tr>
					<td>fashion：</td>
					<td><?=$clothes['fashion']?></td>
				</tr>
			</table>
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
	<script type="text/javascript">
	$('.imgs').mouseover(function(){
		var url = $(this)[0].src;
		$('#img').attr('src',url);
	})
		
	</script>
</body>
</html>