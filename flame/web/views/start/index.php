<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
	<title>布言布语网站启动</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?=Html::cssFile('@web/heyaner/css/start.css');?>
</head>
<body>
	<div class="all">
		<div class="top_logo"><?=Html::img('@web/heyaner/img/logo.jpg',['width'=>'100%'])?></div>
		<div class="med_font">
			<h2>
				<a href="<?php echo Yii::$app->urlManager->createUrl(['/home/lang/languages','lang'=>'zh-CN']);?>">中 &nbsp;文</a>
				|
				<a href="<?php echo Yii::$app->urlManager->createUrl(['/home/lang/languages','lang'=>'en']);?>">English</a>
			</h2>
		</div>
		<div class="foot_logo"id="foot_logo"><?=Html::img('@web/heyaner/img/logoz.png',['style'=>'position:absolute;left:0; width:10%','id'=>"logo"])?></div>
	</div>
	<?=Html::jsFile('@web/heyaner/js/jquery-1.8.3.min.js')?>
	<?=Html::jsFile('@web/heyaner/js/left-right.js')?>
</body>
