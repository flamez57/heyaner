<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>登录</title>
    <meta name="keywords" content="胡来 登陆">
    <meta name="description" content="胡来登陆页面">

    <link rel="shortcut icon" href="flamez/favicon.ico"> 
    <?=Html::cssFile('@web/flamez/css/bootstrap.min14ed.css?v=3.3.6')?>
    <?=Html::cssFile('@web/flamez/css/font-awesome.min93e3.css?v=4.4.0')?>
    <?=Html::cssFile('@web/flamez/css/animate.min.css')?>
    <?=Html::cssFile('@web/flamez/css/style.min862f.css?v=4.1.0')?>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><small>flame</small></h1>

            </div>
            <h3>welcome to flame</h3>
            <?php $form=ActiveForm::begin([
                'id'=>'login',
                'options'=>['class'=>'m-t','role'=>'form']
            ]);?>
                <div class="form-group"> 
                <?=$form->field($model,'username')->textInput(["placeholder"=>"用户名","class"=>"form-control"])->label(''); ?>
                </div>
                <div class="form-group">
                <?=$form->field($model,'password')->passwordInput(['class'=>'form-control','placeholder'=>'密码'])->label(''); ?>
                </div>
                
                <?=Html::submitButton('登 录', ['class'=>'btn btn-primary block full-width m-b']) ?>

                <p class="text-muted text-center"> <a href="#"><small>忘记密码了？</small></a> | <a href="#">注册一个新账号</a>
                </p>
 
            <?php ActiveForm::end();?>
            
        </div>
    </div>
    <?=Html::jsFile('@web/flamez/js/jquery.min.js?v=2.1.4')?>
    <?=Html::jsFile('@web/flamez/js/bootstrap.min.js?v=3.3.6')?>
</body>

</html>
