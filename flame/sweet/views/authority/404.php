<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>404 页面</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="flamez/favicon.ico"> 
    <?=Html::cssFile('@web/flamez/css/bootstrap.min14ed.css?v=3.3.6')?>
    <?=Html::cssFile('@web/flamez/css/font-awesome.min93e3.css?v=4.4.0')?>
    <?=Html::cssFile('@web/flamez/css/animate.min.css')?>
    <?=Html::cssFile('@web/flamez/css/style.min862f.css?v=4.1.0')?>

</head>

<body class="gray-bg">
    <div class="middle-box text-center animated fadeInDown">
        <h1>404</h1>
        <h3 class="font-bold">页面未找到！</h3>

        <div class="error-desc">
            抱歉，页面好像去火星了~
            <form class="form-inline m-t" role="form">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="请输入您需要查找的内容 …">
                </div>
                <button type="submit" class="btn btn-primary">搜索</button>
            </form>
        </div>
    </div>
    <?=Html::jsFile('@web/flamez/js/jquery.min.js?v=2.1.4')?>
    <?=Html::jsFile('@web/flamez/js/bootstrap.min.js?v=3.3.6')?>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
</html>
