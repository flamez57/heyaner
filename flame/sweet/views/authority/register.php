<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 注册</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="flamez/favicon.ico"> 
    <?=Html::cssFile('@web/flamez/css/bootstrap.min14ed.css?v=3.3.6')?>
    <?=Html::cssFile('@web/flamez/css/font-awesome.min93e3.css?v=4.4.0')?>
    <?=Html::cssFile('@web/flamez/css/plugins/iCheck/custom.css')?>
    <?=Html::cssFile('@web/flamez/css/animate.min.css')?>
    <?=Html::cssFile('@web/flamez/css/style.min862f.css?v=4.1.0')?>
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><small>flame</small></h1>

            </div>
            <h3>欢迎注册 flame</h3>
            <p>创建一个flame新账户</p>
            <?php $form=ActiveForm::begin([
                'id'=>'register-form',
                'options'=>['class'=>'m-t','role'=>'form'],
                'enableAjaxValidation'=>true,
            ]);?>
                <div class="form-group">
                    <?=$form->field($model,'username')->textInput(["placeholder"=>"用户名","class"=>"form-control"])->label(''); ?>
                </div>
                <div class="form-group">
                    <?=$form->field($model,'password')->passwordInput(['class'=>'form-control','placeholder'=>'请输入密码'])->label(''); ?>
                </div>
                <div class="form-group">
                    <?=$form->field($model,'passwords')->passwordInput(['class'=>'form-control','placeholder'=>'请再次输入密码'])->label(''); ?>
                </div>
                <div class="form-group text-left">
                    <div class="checkbox i-checks">
                        <label class="no-padding">
                            <input type="checkbox"><i></i> 我同意注册协议</label>
                    </div>
                </div>
                <?=Html::submitButton('注 册', ['class'=>'btn btn-primary block full-width m-b']) ?>

                <p class="text-muted text-center"><small>已经有账户了？</small><a href="">点此登录</a>
                </p>

            <?php ActiveForm::end();?>
        </div>
    </div>
    <?=Html::jsFile('@web/flamez/js/jquery.min.js?v=2.1.4')?>
    <?=Html::jsFile('@web/flamez/js/bootstrap.min.js?v=3.3.6')?>
    <?=Html::jsFile('@web/flamez/js/plugins/iCheck/icheck.min.js')?>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
</html>
